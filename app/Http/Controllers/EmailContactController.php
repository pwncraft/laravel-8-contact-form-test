<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitContactForm;
use Illuminate\Support\Facades\Mail;

class EmailContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function sendEmail(SubmitContactForm $request)
    {
        // Request is validated
        $emailBody = 'From: ' . $request->input('emailAddress') . PHP_EOL;
        $emailBody .= 'First Name: ' . $request->input('firstName') . PHP_EOL;
        $emailBody .= 'Last Name: ' . $request->input('lastName') . PHP_EOL;
        $emailBody .= 'Phone: ' . $request->input('phoneNumber') . PHP_EOL;
        $emailBody .= 'Subject: ' . $request->input('mailSubject') . PHP_EOL;
        $emailBody .= 'Message: ' . $request->input('mailMessage');

        // Send an email
        Mail::raw($emailBody, function ($message) {
            $message
                ->to('someone@somewhere.com')
                ->subject('Contact Form');
        });

        // Give the user feedback and redirect back to contact form
        return redirect()->back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
