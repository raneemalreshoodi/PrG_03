<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        // Validate and process the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        // Save the contact form data to the database
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'title' => $validated['title'],
            'message' => $validated['message'],
        ]);
    
        // Redirect with a success message
        return redirect()->route('contact.form')->with('success', 'تم ارسال الرسالة بنجاح');
    }
    
}
