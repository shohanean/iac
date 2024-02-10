<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.banner.index', [
            'term' => 'Banner',
            'banners' => Banner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create', [
            'term' => 'Banner'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = Image::read($request->file('image'));
        $photoname = "banners/" . Str::random(5) . "." . $request->file('image')->getClientOriginalExtension();
        $image->save(base_path('public/uploads/' . $photoname), 40);

        if ($request->btn_text) {
            $btn_status = true;
        } else {
            $btn_status = false;
        }

        Banner::create([
            'image' => $photoname,
            'top_line' => $request->top_line,
            'tag_line' => $request->tag_line,
            'btn_status' => $btn_status,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
        ]);
        return back()->with('success', 'Banner Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back()->with('success', 'Banner Deleted Successfully!');
    }
}
