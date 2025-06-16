<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Render the contact form view.
    }

    public function submitMessage(Request $request)
    {
        $request->validate([
            'f_name' => 'required|min:3',
            'l_name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'message' => 'required|min:20',
        ]);

        $contact = new Contact();
        $contact->first_name = $request->f_name;
        $contact->last_name = $request->l_name;
        $contact->email = $request->email;
        $contact->contact = $request->phone;
        $contact->message = $request->message;
        $contact->ip = $request->ip();
        $contact->status = 0;
        $contact->save();

        return redirect()->back()->with('success', "Thanks for Contacting Us. We'll respond to you ASAP!");
    }
}
