<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassAttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DefermentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SessionChangeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Models\ClassAttendace;
use App\Models\Deferment;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});

Route::prefix('admin')->group(function () {

    // Admin Page Route Controller
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/profile', 'profile')->name('admin.profile');
    });

    // Students Route Controller
    Route::controller(StudentController::class)->group(function () {
        Route::get('/students', 'index')->name('admin.student.index');
        Route::get('/students/create', 'create')->name('admin.student.create');
        Route::post('/students/store', 'store')->name('admin.student.store');
    });

    // Courses route controller
    Route::controller(CourseController::class)->group(function(){
        Route::get('/courses', 'index')->name('admin.course.index');
        Route::get('/courses/create', 'create')->name('admin.course.create');
        Route::post('/courses/store', 'store')->name('admin.course.store');
    });

    // Program route controller
    Route::controller(ProgramController::class)->group(function(){
        Route::get('/programs', 'index')->name('admin.program.index');
        Route::get('/programs/create', 'create')->name('admin.program.create');
        Route::post('/programs/store', 'store')->name('admin.program.store');
    });

    // Session route controller
    Route::controller(SessionController::class)->group(function(){
        Route::get('/sessions', 'index')->name('admin.session.index');
        Route::get('/sessions/create', 'create')->name('admin.session.create');
        Route::post('/sessions/store', 'store')->name('admin.session.store');
    });

    // deferment route controller
    Route::controller(DefermentController::class)->group(function(){
        Route::get('/deferment', 'index')->name('admin.deferment.index');
        Route::get('/deferment/create', 'create')->name('admin.deferment.create');
    });

      // ClassAttendance route controller
      Route::controller(ClassAttendanceController::class)->group(function(){
        Route::get('/classAttendance', 'index')->name('admin.classAttendance.index');
        Route::get('/classAttendance/create', 'create')->name('admin.classAttendance.create');
    });

      // SessionChange route controller
      Route::controller(SessionChangeController::class)->group(function(){
        Route::get('/sessionChange', 'index')->name('admin.sessionChange.index');
        Route::get('/sessionChange/create', 'create')->name('admin.sessionChange.create');
    });

});
