<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentUpdateMail;
use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\MedicalReport;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DoctorPortalController extends Controller
{
    private function doctor()
    {
        $user = auth()->user();
        abort_unless($user && $user->isDoctor() && $user->doctor?->is_active, 403);
        return $user->doctor;
    }

    public function dashboard()
    {
        $doctor = $this->doctor();
        $today = now()->toDateString();
        $appointments = $doctor->appointments()->with('patient')->orderBy('appointment_date')->orderBy('appointment_time');
        $patientIds = $doctor->appointments()->whereNotNull('patient_id')->distinct()->pluck('patient_id');

        return view('doctor.dashboard', [
            'doctor' => $doctor,
            'totalPatients' => $patientIds->count(),
            'todayAppointments' => (clone $appointments)->whereDate('appointment_date', $today)->whereNot('status', 'cancelled')->count(),
            'upcomingAppointments' => (clone $appointments)->whereDate('appointment_date', '>=', $today)->whereNot('status', 'cancelled')->count(),
            'completedAppointments' => (clone $appointments)->where('status', 'completed')->count(),
            'pendingAppointments' => (clone $appointments)->where('status', 'pending')->count(),
            'recentAppointments' => (clone $appointments)->latest('appointment_date')->latest('appointment_time')->take(6)->get(),
            'recentReports' => $doctor->reports()->with('patient')->latest()->take(5)->get(),
        ]);
    }

    public function patients(Request $request)
    {
        $doctor = $this->doctor();
        $ids = $doctor->appointments()->distinct()->pluck('patient_id')->filter();
        $patients = \App\Models\User::whereIn('id', $ids)
            ->when($request->q, fn ($q, $v) => $q->where(fn ($x) => $x->where('name', 'like', "%{$v}%")->orWhere('email', 'like', "%{$v}%")))
            ->withCount(['appointments' => fn ($q) => $q->where('doctor_id', $doctor->id)])
            ->with(['appointments' => fn ($q) => $q->where('doctor_id', $doctor->id)->latest('appointment_date')->with('doctor')])
            ->paginate(12)->withQueryString();
        return view('doctor.patients.index', compact('patients', 'doctor'));
    }

    public function patient(\App\Models\User $patient)
    {
        $doctor = $this->doctor();
        abort_unless($doctor->appointments()->where('patient_id', $patient->id)->exists(), 403);
        $patient->load([
            'appointments' => fn ($q) => $q->where('doctor_id', $doctor->id)->latest('appointment_date'),
            'reports' => fn ($q) => $q->where('doctor_id', $doctor->id)->latest(),
            'medicalRecords' => fn ($q) => $q->where('doctor_id', $doctor->id)->latest(),
        ]);
        return view('doctor.patients.show', compact('patient', 'doctor'));
    }

    public function appointments(Request $request)
    {
        $doctor = $this->doctor();
        $appointments = $doctor->appointments()->with('patient')
            ->when($request->status, fn ($q, $v) => $q->where('status', $v))
            ->when($request->date, fn ($q, $v) => $q->whereDate('appointment_date', $v))
            ->when($request->q, fn ($q, $v) => $q->whereHas('patient', fn ($p) => $p->where('name', 'like', "%{$v}%")))
            ->orderByDesc('appointment_date')->orderBy('appointment_time')->paginate(15)->withQueryString();
        return view('doctor.appointments.index', compact('appointments', 'doctor'));
    }

    public function updateAppointmentStatus(Request $request, Appointment $appointment)
    {
        $doctor = $this->doctor();
        abort_unless($appointment->doctor_id === $doctor->id, 403);
        $data = $request->validate(['status' => ['required', 'in:confirmed,cancelled']]);

        $isApproval = $data['status'] === 'confirmed';
        $canUpdate = $isApproval
            ? $appointment->status === 'pending'
            : in_array($appointment->status, ['pending', 'confirmed'], true);
        if (! $canUpdate) return back()->with('success', 'This appointment has already been updated.');

        $wasConfirmed = $appointment->status === 'confirmed';
        $appointment->update([
            'status' => $data['status'],
            'confirmed_at' => $isApproval ? now() : null,
            'last_reminder_sent_at' => null,
        ]);
        $appointment->load('doctor.user');
        $event = $isApproval ? 'approved' : ($wasConfirmed ? 'cancelled' : 'declined');
        $doctorPhone = $doctor->phone ?: $doctor->user?->phone;

        if ($appointment->patient_id) {
            Notification::create([
                'user_id' => $appointment->patient_id,
                'type' => 'appointment',
                'title' => $event === 'approved' ? 'Appointment approved' : ($event === 'cancelled' ? 'Appointment cancelled' : 'Appointment request declined'),
                'message' => $event === 'approved' ? "Dr. {$doctor->name} approved your appointment. Please arrive a few minutes early." : "Dr. {$doctor->name} {$event} your appointment. Contact: {$doctorPhone}",
                'action_url' => route('dashboard'),
            ]);
        }
        if ($appointment->patient_email) {
            try { Mail::to($appointment->patient_email)->send(new AppointmentUpdateMail($appointment, $event)); } catch (\Throwable $mailError) { report($mailError); }
        }
        return back()->with('success', $isApproval ? 'Appointment approved and the patient has been notified.' : 'Appointment cancelled and the patient has been notified.');
    }

    public function rescheduleAppointment(Request $request, Appointment $appointment)
    {
        $doctor = $this->doctor();
        abort_unless($appointment->doctor_id === $doctor->id, 403);
        abort_unless(in_array($appointment->status, ['pending', 'confirmed'], true), 422);
        $data = $request->validate(['appointment_date' => ['required', 'date', 'after_or_equal:today'], 'appointment_time' => ['required', 'date_format:H:i']]);
        $slotTaken = Appointment::query()->where('doctor_id', $doctor->id)->whereDate('appointment_date', $data['appointment_date'])->where('appointment_time', $data['appointment_time'])->whereIn('status', ['pending', 'confirmed'])->whereKeyNot($appointment->id)->exists();
        if ($slotTaken) return back()->withErrors(['appointment_time' => 'This time slot is already booked.'])->withInput();

        $appointment->update([...$data, 'status' => 'confirmed', 'confirmed_at' => now(), 'last_reminder_sent_at' => null]);
        $appointment->load('doctor.user');
        if ($appointment->patient_id) {
            Notification::create(['user_id' => $appointment->patient_id, 'type' => 'appointment', 'title' => 'Appointment rescheduled', 'message' => "Dr. {$doctor->name} rescheduled your appointment to {$appointment->appointment_date->format('d M Y')} at " . substr($appointment->appointment_time, 0, 5) . '.', 'action_url' => route('dashboard')]);
        }
        if ($appointment->patient_email) {
            try { Mail::to($appointment->patient_email)->send(new AppointmentUpdateMail($appointment, 'rescheduled')); } catch (\Throwable $mailError) { report($mailError); }
        }
        return back()->with('success', 'Appointment rescheduled and the patient has been notified.');
    }

    public function sendPatientNotification(Request $request, \App\Models\User $patient)
    {
        $doctor = $this->doctor();
        abort_unless($doctor->appointments()->where('patient_id', $patient->id)->exists(), 403);
        $data = $request->validate(['title' => ['required', 'string', 'max:120'], 'message' => ['required', 'string', 'max:1000']]);
        Notification::create(['user_id' => $patient->id, 'type' => 'doctor_message', 'title' => $data['title'], 'message' => $data['message'], 'action_url' => route('patient.notifications')]);
        return back()->with('success', 'Notification sent to the patient.');
    }

    public function profile()
    {
        return view('doctor.profile', ['doctor' => $this->doctor(), 'user' => auth()->user()]);
    }

    public function updateProfile(Request $request)
    {
        $doctor = $this->doctor();
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'], 'phone' => ['nullable', 'string', 'max:30'],
            'education' => ['nullable', 'string', 'max:255'], 'experience_years' => ['required', 'integer', 'min:0', 'max:80'],
            'biography' => ['nullable', 'string', 'max:5000'], 'photo' => ['nullable', 'image', 'max:3072'],
            'current_password' => ['nullable', 'required_with:password'], 'password' => ['nullable', 'string', 'min:10', 'confirmed'],
        ]);
        $userData = ['name' => $data['name'], 'phone' => $data['phone']];
        if ($request->hasFile('photo')) $data['photo'] = $request->file('photo')->store('doctor-profiles', 'public');
        unset($data['name']);
        $doctor->update($data);
        $user = auth()->user();
        $user->update($userData);
        if (! empty($data['password'])) {
            abort_unless(Hash::check($data['current_password'], $user->password), 422, 'Current password is incorrect.');
            $user->update(['password' => Hash::make($data['password'])]);
        }
        return back()->with('success', 'Profile updated successfully.');
    }
}
