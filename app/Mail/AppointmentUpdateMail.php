<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Appointment $appointment, public string $event) {}

    public function build(): self
    {
        return $this->subject(match ($this->event) {
            'rescheduled' => 'Appointment rescheduled - MediCare',
            'cancelled' => 'Appointment cancelled - MediCare',
            'declined' => 'Appointment request declined - MediCare',
            default => 'Appointment approved - MediCare',
        })->view('emails.appointment-update');
    }
}
