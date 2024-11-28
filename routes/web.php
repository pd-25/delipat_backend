<?php

use App\Http\Controllers\frontend\frontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[frontController::class, 'index'])->name('index');
Route::get('/about-us',[frontController::class, 'about'])->name('about');
Route::get('/services',[frontController::class, 'service'])->name('service');
Route::get('/gallery',[frontController::class, 'gallery'])->name('gallery');
Route::get('/blog',[frontController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [frontController::class, 'showblog'])->name('blog.show');
Route::get( '/industry',[frontController::class, 'industry'])->name('industry');
Route::get( '/contact-us',[frontController::class, 'contactus'])->name('contactus');
// Auth::routes();


require __DIR__ . '/admin.php';

