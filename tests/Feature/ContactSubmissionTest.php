<?php

namespace Tests\Feature;

use App\Mail\ContactInquiryMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactSubmissionTest extends TestCase
{
    public function test_contact_form_submits_and_sends_email_to_business_address(): void
    {
        Mail::fake();
        $this->withoutMiddleware();

        $response = $this->from('/contact')->post(route('contact.store'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'subject' => 'Consultation inquiry',
            'message' => 'I need a consultation for my health issue.',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Consultation inquiry',
        ]);

        Mail::assertSent(ContactInquiryMail::class, function ($mail) {
            $this->assertSame('vaseemkhan@gmail.com', $mail->to[0]['address'] ?? null);
            $this->assertSame('john@example.com', $mail->contactMessage->email);

            return true;
        });
    }
}
