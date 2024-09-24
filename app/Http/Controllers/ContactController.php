<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function create()
    {
        return view('miranda/contact');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact.create');
    }
}
