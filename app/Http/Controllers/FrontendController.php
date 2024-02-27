<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Comment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $faqs = Faq::where('status', true)->get();
        $banners = Banner::all();
        $blogs = Blog::with('user')->latest()->take(3)->get();
        return view('frontend.home', compact('faqs', 'banners', 'blogs'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function blogs()
    {
        $blogs = Blog::with('user')->latest()->get();
        return view('frontend.blogs.index', compact('blogs'));
    }
    public function blogs_details($slug)
    {
        $blog = Blog::with('comments')->where('slug', $slug)->firstOrFail();
        $latests = Blog::with('user')->latest()->take(3)->get();
        $latest_comments = Comment::with('blog')->latest()->take(5)->get();
        return view('frontend.blogs.show', compact('blog', 'latests', 'latest_comments'));
    }
    public function blogs_comment($blog_id, Request $request)
    {
        $request->validate([
            'comment' => "required"
        ]);
        Comment::create([
            'blog_id' => $blog_id,
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
        ]);
        return back()->with('success', 'Comment Added Successfully!');
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
