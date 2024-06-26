<?php

use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
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





Route::get('/',[HomepageController::class, 'homePage'])->name('homepage');
Route::get('/blogs',[BlogpageController::class, 'blogPage'])->name('blogpage');
Route::get('/blog/{slug}',[BlogpageController::class, 'singleBlog'])->name('singleblog');
Route::get('contact',[ContactpageController::class, 'index'])->name('contactpage');
Route::get('about',[AboutpageController::class, 'index'])->name('aboutpage');

Route::get('/test', function () {
    return view('test');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
