<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Mail\AppointmentConfirmationMail;
use App\Mail\DoctorAppointmentMail;
use App\Models\Notification;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Specialty;
use App\Models\User;
use App\Notifications\AppointmentStatusNotification;
use App\Services\AccountAccessService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
public function create(Request $request)
{
    $specialtyId = $request->get('specialty_id');

    $specialties = Specialty::where('is_active', true)
        ->orderBy('name')
        ->get();

    $doctors = Doctor::where('is_active', true)
        ->with('specialty:id,name')
        ->orderBy('name')
        ->get();

    $services = Service::where('is_active', true)
        ->orderBy('title')
        ->get();

    return view('appointments.create', [
        'specialties' => $specialties,
        'doctors' => $doctors,
        'services' => $services,
        'selectedSpecialty' => $specialtyId,
    ]);
}
    public function store(StoreAppointmentRequest $request, AccountAccessService $access)
    {
        $data=$request->validated();
        $doctor=Doctor::whereKey($data['doctor_id'])->where('is_active',true)->firstOrFail();
        // The doctor is the source of truth for specialty.  The UI uses the
        // specialty field to filter doctors, but a stale browser value must
        // never prevent a valid appointment from being created.
        $data['specialty_id'] = $doctor->specialty_id;
        $authenticatedPatient = auth()->user()?->isPatient() === true;
        $createdPatient = false;

        if ($authenticatedPatient) {
            $patient=auth()->user();
            $data['patient_name']=$patient->name;
            $data['patient_email']=$patient->email;
            $data['patient_phone']=$patient->phone ?: ($data['patient_phone'] ?? null);
        } else {
            // Admins and doctors can use the public website while still signed
            // into their portal. Treat this as a public booking instead of
            // returning a raw 403 response.
            $existing=User::where('email',$data['patient_email'])->first();
            if ($existing && ! $existing->isPatient()) {
                return back()->withErrors(['patient_email'=>'This email is already associated with a staff account. Please use another patient email.'])->withInput();
            }

            $patient=$existing;
            if (! $patient) {
                $patient=DB::transaction(function() use ($data) {
                    return User::create([
                        'name'=>$data['patient_name'],'email'=>$data['patient_email'],
                        'phone'=>$data['patient_phone'] ?? null,
                        'password'=>Hash::make(Str::random(48)),
                        'role'=>'patient',
                    ]);
                });
                $createdPatient = true;
            }
        }

        try {
            $appointment=DB::transaction(function() use ($data,$patient,$doctor) {
                return Appointment::create([
                    ...$data,'patient_id'=>$patient->id,'doctor_id'=>$doctor->id,'status'=>'pending',
                ]);
            });
        } catch (QueryException $e) {
            if ((string)$e->getCode()==='23000') {
                return back()->withErrors(['appointment_time'=>'This appointment slot was just booked. Please choose another time.'])->withInput();
            }
            throw $e;
        }

        if ($createdPatient) {
            try { $access->sendSetup($patient,'Patient Dashboard'); } catch (\Throwable $mailError) { report($mailError); }
        }
        $appointment->load(['doctor','service','patient']);
        try {
            Mail::to($patient->email)->send(new AppointmentConfirmationMail($appointment));
        } catch (\Throwable $mailError) {
            report($mailError);
        }

        if ($doctor->user) {
            Notification::create([
                'user_id' => $doctor->user->id,
                'type' => 'appointment',
                'title' => 'New appointment request',
                'message' => "New appointment from {$appointment->patient_name}.",
                'action_url' => route('doctor.appointments'),
            ]);

            if ($doctor->user->email) {
                try {
                    Mail::to($doctor->user->email)->send(new DoctorAppointmentMail($appointment));
                } catch (\Throwable $mailError) {
                    report($mailError);
                }
            }
        }

        return redirect()->route('appointments.success',$appointment)
            ->with('success','Your appointment request has been received. A confirmation email has been sent.');
    }

    public function success(Appointment $appointment)
    {
        return view('appointments.success', compact('appointment'));
    }
}
