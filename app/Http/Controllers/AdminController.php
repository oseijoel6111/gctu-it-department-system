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
        return view('admin.pages.enrollcourse');
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
}
