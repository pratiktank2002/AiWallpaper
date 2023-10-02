<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('user detail.user_detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function updateImageGenerationCount(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Get the user's UserDetail record
        $userDetail = UserDetail::where('user_id', $user->id)->first();

        if (!$userDetail) {
            return response()->json(['success' => false, 'message' => 'User details not found'], 404);
        }

        // Check if the image_genrate_count is within the limit
        if ($userDetail->image_genrate_count >= 5) {
            return response()->json(['success' => true, 'limitExceeded' => true, 'message' => 'Daily limit exceeded'], 400);
        }

        // Update the image_genrate_count
        $userDetail->image_genrate_count += 1;
        $userDetail->save();

        return response()->json(['success' => true, 'limitExceeded' => false, 'message' => 'Image generation count updated successfully']);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());

        $userDetail = new UserDetail();

        $userDetail->user_id = Auth::user()->id;
        $userDetail->name = $request->name;
        $userDetail->phone_number = $request->phone_number;
        $userDetail->country = $request->country;
        $userDetail->state = $request->state;
        $userDetail->city = $request->city;
        $userDetail->save();

        return redirect()->route('image_generate')->with('message','user detail created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
