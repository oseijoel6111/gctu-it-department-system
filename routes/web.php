<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/', 'index');
    Route::get('/profile', 'profile')->name('admin.profile');
});
