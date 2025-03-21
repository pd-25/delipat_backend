<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\blog\BlogController;
use App\Http\Controllers\admin\casestudies\casestudiesController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\gallery\GalleryImageController;
use App\Http\Controllers\admin\metadata\MetaDataController;
use App\Http\Controllers\admin\partner\partnelogoController;
use App\Http\Controllers\admin\sitesetting\siteSettingController;
use App\Http\Controllers\admin\testimonial\testimonialController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
    Route::resource('site-settings', siteSettingController::class);
    Route::resource('gallery', GalleryImageController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('seo-settings', MetaDataController::class);
    Route::resource('case-studies', casestudiesController::class);
    route::resource('services', ServiceController::class);
    Route::resource('testimonials', testimonialController::class);
    Route::resource('partner', partnelogoController::class);


});
