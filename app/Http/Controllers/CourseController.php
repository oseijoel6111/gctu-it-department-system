<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(){
        return view('admin.pages.courses.index');
    }

    public function create(){
        return view('admin.pages.courses.create');
    }

    public function store(){


    }

}
