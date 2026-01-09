<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        // Send email
        // Note: Configure mail settings in .env
        Mail::to('afaqtahir0687@gmail.com')->send(new ContactFormMail($data));

        return back()->with('success', 'Thank you for contacting me! I will get back to you soon.');
    }
}
