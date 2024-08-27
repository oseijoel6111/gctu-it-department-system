<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StudentController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});

Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/profile', 'profile')->name('admin.profile');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::get('/students', 'index')->name('admin.student.index');
        Route::get('/students/create', 'create')->name('admin.student.create');
        Route::post('/students/store', 'store')->name('admin.student.store');
    });
});
