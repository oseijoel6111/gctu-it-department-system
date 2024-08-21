<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.pages.index');
    }

    public function profile(){
        return view('admin.pages.profile');
    }
    public function course(){
        return view('admin.pages.enroll_course');
    }
    public function review(){
        return view('admin.pages.review');
    }

    public function assignment(){
        return view('admin.pages.assignment');
    }
    public function announcement(){
        return view('admin.pages.announcement');
    }
    
    public function calender(){
        return view('admin.pages.calender');
    }

    public function student_index(){
        return view('admin.pages.student_index');
    }

    public function student_course(){
        return view('admin.pages.student_enrollcourse');
    }

    public function student_profile(){
        return view('admin.pages.student_profile');
    }

    public function student_review(){
        return view('admin.pages.student_review');
    }
}
