<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Retrieve form input data
        $contactData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Optionally, send an email notification with the contact form data
        Mail::to('your-email@example.com')->send(new ContactFormMail($contactData));

        // Optionally, you could also store this data in the database if you have a Contact model

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
