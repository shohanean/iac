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
            'contacts' => Contact::withTrashed()->latest()->get()
        ]);
    }
    function contacts_read($id)
    {
        Contact::find($id)->delete();
        return back()->with('success', 'Message Marked As Read!');
    }
    function contacts_delete($id)
    {
        Contact::withTrashed()->find($id)->forceDelete();
        return back()->with('success', 'Message Deleted Successfully!');
    }
    function contacts_all_read()
    {
        Contact::whereNull('deleted_at')->delete();
        return back();
    }
    function eligibility_test(){
        return view('backend.others.eligibility_test');
    }
}
