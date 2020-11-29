<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitContactForm;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EmailContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function sendEmail(SubmitContactForm $request)
    {
        // etc
        Alert::success('Email Sent', 'We have received your message and would like to thank you for writing to us.');
        return redirect()->back();
    }
}
