<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $faqs = Faq::where('status', true)->get();
        $banners = Banner::all();
        $blogs = Blog::all();
        return view('frontend.home', compact('faqs', 'banners', 'blogs'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact_us()
    {
        return view('frontend.contact_us');
    }
    public function contact_us_post(Request $request)
    {
        $request->validate([
            '*' => 'required',
            'email' => 'email',
        ]);
        Contact::create($request->except('_token'));
        return back()->with('success', 'Message Send Successfully!');
    }
}
