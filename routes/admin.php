<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('category-mamages', CategoryController::class);
    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});
