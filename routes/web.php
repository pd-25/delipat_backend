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
Route::get('/case-studies',[frontController::class, 'case_study'])->name('case-study');
Route::get('/case-studies/{slug}', [frontController::class, 'showblog'])->name('case-study.show');
Route::get( '/industry',[frontController::class, 'industry'])->name('industry');
Route::get( '/contact-us',[frontController::class, 'contactus'])->name('contactus');
Route::get( '/service/{service_slug}',[frontController::class, 'singleService'])->name('singleService');
Route::get('/thank-you',[frontController::class, 'thankyou'])->name('thankyou');
Route::get('/privacy-policy',[frontController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-Conditions',[frontController::class, 'terms'])->name('terms');
Route::get('/privacy-policy',[frontController::class, 'privacy'])->name('privacy');
Route::get('/refund-policy',[frontController::class, 'refund'])->name('refund');


// Auth::routes();


require __DIR__ . '/admin.php';

