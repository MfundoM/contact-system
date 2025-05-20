<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $submissions = Contact::orderBy('created_at', 'desc')->paginate(10);

        return view('admin', compact('submissions'));
    }
}
