<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.visa.index', [
            'term' => 'Visa',
            'blogs' => Visa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.visa.create', [
            'term' => 'Visa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = Image::read($request->file('image'));
        $photoname = "visas/" . Str::random(5) . "." . $request->file('image')->getClientOriginalExtension();
        $image->save(base_path('public/uploads/' . $photoname), 40);

        Visa::create([
            'slug' => Str::slug($request->title) . "-" . Str::lower(Str::random(3)),
            'user_id' => auth()->id(),
            'title' => $request->title,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'image' => $photoname,
        ]);
        return back()->with('success', 'Visa Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visa $visa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visa $visa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visa $visa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visa $visa)
    {
        //
    }
}
