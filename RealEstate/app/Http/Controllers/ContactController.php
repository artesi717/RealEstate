<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contactus');
    }

    public function sendemail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'message' => $request->message
        ];

        Mail::to('realestatevikings@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
