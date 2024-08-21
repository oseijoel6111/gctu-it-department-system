<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/', 'index')->name('admin.index');
    Route::get('/profile', 'profile')->name('admin.profile');
    Route::get('/enroll_course', 'course')->name('admin.enroll_course');
    Route::get('/review', 'review')->name('admin.review');
    Route::get('/assignment', 'assignment')->name('admin.assignment');
    Route::get('/announcement', 'announcement')->name('admin.announcement');
    Route::get('/calender', 'calender')->name('admin.calender');
    Route::get('/student_index','student_index')->name('admin.student_index');
});
