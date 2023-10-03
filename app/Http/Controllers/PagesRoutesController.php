<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesRoutesController extends Controller
{
    //
    public function image_generate()
    {
        if (!auth()) {
            return redirect()->back()->with('message', 'sign in to genrate image');
        }

        $userDetail = UserDetail::where('user_id', Auth::user()->id)->get()->first();
        // $userDetail = UserDetail::where('user_id', 5)->get()->first();

        $user_image_limit = $userDetail->image_genrate_count;

        if ($userDetail == null) {
            return redirect()->route('user_detail.index');
        } else {
            return view('pages.image-generator');
        }

    }

    // mobile image pages
    public function mobileWallpapers()
    {

        $allProducts = Products::where('is_mobile', '1')->get();
        // dd($allProducts);

        return view('pages.mobile-wallpaper', compact('allProducts'));
    }


    // post page
    public function post()
    {
        return view('pages.post');
    }

    // Author page
    public function author()
    {
        return view('pages.author');
    }
}
