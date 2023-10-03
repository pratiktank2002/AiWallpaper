<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allBlogs = Blogs::all();
        // dd($allBlogs);

        return view('pages.bloges', compact('allBlogs'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}
