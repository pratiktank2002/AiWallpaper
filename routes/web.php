<?php

use App\Http\Controllers\PagesRoutesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDetailController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // page controller routes
    Route::get('/image_generate', [PagesRoutesController::class, 'image_generate'])->name('image_generate');

    // user detail routes
    Route::get('/user_detail', [UserDetailController::class, 'index'])->name('user_detail.index');
    Route::post('/user_add', [UserDetailController::class, 'store'])->name('user_add.store');
    Route::post('/update-image-generation-count', [UserDetailController::class, 'updateImageGenerationCount'])->name('update-image-generation-count');
});

require __DIR__.'/auth.php';
