<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',

            'message' => 'required|string',
        ]);
        Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);
        // Yahan apne logic likho - jaise email bhejna ya database me save karna

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
