<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactMessage $contactMessage)
    {
        //
    }

    public function build(): self
    {
        return $this->from(config('mail.from.address', 'hello@medicare.test'), config('mail.from.name', 'MediCare'))
            ->replyTo($this->contactMessage->email, $this->contactMessage->name)
            ->subject('New contact inquiry from ' . $this->contactMessage->name . ' — MediCare')
            ->view('emails.contact-inquiry');
    }
}
