<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function submitForm(ContactRequest $request)
    {
        try {
            Contact::create($request->validated());

            return back()->with('success', 'Message submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());

            return back()->withErrors(['error' => 'Something went wrong. Please try again later.']);
        }
    }
}
