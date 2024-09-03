<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassAttendanceController extends Controller
{
    public function index(){
        return view('admin.pages.classAttendance.index');
    }

    public function create()
    {
        return view('admin.pages.classAttendance.create');
    }
 
}
