<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesRoutesController extends Controller
{
    //
    public function image_generate()
    {
        return view('pages.image-generator');
    }
}
