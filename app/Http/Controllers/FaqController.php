<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.faq.index', [
            'term' => 'FAQ',
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.faq.create', [
            'term' => 'FAQ'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faq::create($request->except('_token') + [
            'user_id' => auth()->id()
        ]);
        return back()->with('success', 'FAQ Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        return view('backend.faq.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        $term = 'FAQ';
        return view('backend.faq.edit', compact('faq', 'term'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        if ($request->status == 'on') {
            $faq->status = true;
        } else {
            $faq->status = false;
        }
        $faq->save();
        return back()->with('success', 'FAQ Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back();
    }

    /**
     * Custom functions
     */
    public function faq_status_toggle(Faq $faq)
    {
        if ($faq->status) {
            $faq->status = false;
        } else {
            $faq->status = true;
        }
        $faq->save();
        return back();
    }
}
