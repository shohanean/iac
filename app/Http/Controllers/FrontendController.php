<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $faqs = Faq::where('status', true)->get();
        $banners = Banner::all();
        return view('frontend.home', compact('faqs', 'banners'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact_us()
    {
        return view('frontend.contact_us');
    }
}
