<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/login', 'login')->name('login');
    Route::get('/signin', 'signin');
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/', 'index');
    Route::get('/profile', 'profile')->name('admin.profile');
    Route::get('/enrollcourse', 'course')->name('admin.enrollcourse');
    Route::get('/review', 'review')->name('admin.review');
    Route::get('/assignment', 'assignment')->name('admin.assignment');
    Route::get('/announcement', 'announcement')->name('admin.announcement');
    Route::get('/calender', 'calender')->name('admin.calender');
});
