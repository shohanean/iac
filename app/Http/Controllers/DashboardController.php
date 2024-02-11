<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\User;
use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'banners' => Banner::count(),
            'faqs' => Faq::count(),
            'blogs' => Blog::count(),
            'users' => User::count(),
            'messages' => Contact::count()
        ]);
    }
}
