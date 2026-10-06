<?php

namespace App\Console\Commands;

use App\Mail\AppointmentReminderMail;
use App\Models\Appointment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendAppointmentReminders extends Command
{
    protected $signature = 'appointments:send-reminders';

    protected $description = 'Send daily reminders for upcoming confirmed appointments';

    public function handle(): int
    {
        $now = now();
        $oneDayAgo = $now->copy()->subDay();

        $appointments = Appointment::query()
            ->with('doctor')
            ->where('status', 'confirmed')
            ->where(function ($query) use ($oneDayAgo) {
                $query->where('confirmed_at', '<=', $oneDayAgo)
                    ->orWhere(function ($legacy) use ($oneDayAgo) {
                        $legacy->whereNull('confirmed_at')
                            ->where('updated_at', '<=', $oneDayAgo);
                    });
            })
            ->where(function ($query) use ($oneDayAgo) {
                $query->whereNull('last_reminder_sent_at')
                    ->orWhere('last_reminder_sent_at', '<=', $oneDayAgo);
            })
            ->where(function ($query) use ($now) {
                $query->whereDate('appointment_date', '>', $now->toDateString())
                    ->orWhere(function ($today) use ($now) {
                        $today->whereDate('appointment_date', $now->toDateString())
                            ->where('appointment_time', '>', $now->format('H:i:s'));
                    });
            })
            ->cursor();

        $sent = 0;

        foreach ($appointments as $appointment) {
            if (! $appointment->patient_email) {
                continue;
            }

            try {
                Mail::to($appointment->patient_email)->send(new AppointmentReminderMail($appointment));
                $appointment->update(['last_reminder_sent_at' => now()]);
                $sent++;
            } catch (\Throwable $exception) {
                report($exception);
                $this->error("Could not send reminder for appointment #{$appointment->id}.");
            }
        }

        $this->info("Sent {$sent} appointment reminder(s).");

        return self::SUCCESS;
    }
}
