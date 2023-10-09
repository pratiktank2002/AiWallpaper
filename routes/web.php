<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\NewsLetterController;
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

// routes for products & search products
Route::get('/', [ProductsController::class, 'index'])->name('index');
Route::get('/search-products', [ProductsController::class, 'searchProducts'])->name('search-products');

// Routes for all pages
Route::get('/mobile-wallpapers', [PagesRoutesController::class, 'mobileWallpapers'])->name('mobileWallpapers');
Route::get('/author', [PagesRoutesController::class, 'author'])->name('author');
Route::get('/post',[PagesRoutesController::class, 'post'])->name('post');

// user's dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routes for blogs page
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');

// 404 page routes
Route::get('/404', function () {
    return view('pages.404');
});

// newsletter routes
Route::post('/newsLetter', [NewsLetterController::class, 'store'])->name('newsLetter');

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
    Route::post('/update-image-download-count', [UserDetailController::class, 'updateImageDownloadCount'])->name('update-image-download-count');

});

require __DIR__.'/auth.php';
