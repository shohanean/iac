<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create', [
            'term' => 'Blog'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = Image::read($request->file('image'));
        $photoname = "blogs/" . Str::random(5) . "." . $request->file('image')->getClientOriginalExtension();
        $image->save(base_path('public/uploads/' . $photoname), 40);

        Blog::create([
            'slug' => Str::slug($request->heading)."-".Str::lower(Str::random(3)),
            'user_id' => auth()->id(),
            'heading' => $request->heading,
            'details' => $request->details,
            'image' => $photoname,
        ]);
        return back()->with('success', 'Blog Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
