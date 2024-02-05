<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $faqs = Faq::where('status', true)->get();
        return view('frontend.home', compact('faqs'));
    }
    public function contact_us()
    {
        return view('frontend.contact_us');
    }
}
