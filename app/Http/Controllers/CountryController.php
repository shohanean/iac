<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.country.index', [
            'term' => 'Country',
            'countries' => Country::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.country.create', [
            'term' => 'Country'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'caption' => 'required',
            'flag' => 'image|required',
            'image' => 'image|required'
        ]);
        Country::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'caption' => $request->caption,
            'flag' => "asd",
            'image' => "xc"
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('backend.Country.show', [
            'country' => 'Country'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('backend.Country.edit', [
            'country' => $country
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        return $country;
    }
}
