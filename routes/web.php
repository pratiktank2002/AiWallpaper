<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ProductsController::class, 'index'])->name('index');


Route::get('/author', function () {
    return view('pages.author');
})->name('author');


Route::get('/post', function () {
    return view('pages.post');
})->name('post');
