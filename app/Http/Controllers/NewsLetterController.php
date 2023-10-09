<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email',
        ]);
        // dd($request->all(), date('Y-m-d'));
        $newsLetter = new NewsLetter();

        $newsLetter->email = $request->email;
        $newsLetter->date = date('Y-m-d');
        $newsLetter->save();

        return redirect()->back()->with('message', $newsLetter->email . " Is Subscribed to NewsLetter");
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
