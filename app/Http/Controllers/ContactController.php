<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactInquiryMail;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $contactMessage = ContactMessage::create($request->validated());

        try {
            Mail::to('vaseemkhan@gmail.com')
                ->send(new ContactInquiryMail($contactMessage));
        } catch (\Throwable $e) {
            report($e);
        }

        return back()->with('success', 'Aapka message mil gaya hai, hum jald contact karenge.');
    }
}
