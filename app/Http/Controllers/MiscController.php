<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MiscController extends Controller
{
    function contacts_index()
    {
        return view('backend.others.contacts', [
            'term' => 'Contact',
            'contacts' => Contact::latest()->get()
        ]);
    }
}
