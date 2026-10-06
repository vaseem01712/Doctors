<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Appointment $appointment) {}

    public function build(): self
    {
        $approved = $this->appointment->status === 'confirmed';

        return $this
            ->subject($approved ? 'Appointment approved — MediCare' : 'Appointment update — MediCare')
            ->view('emails.appointment-status');
    }
}
