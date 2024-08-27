<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(){
        return view('admin.pages.student.index');
    }

    public function create(){
        return view('admin.pages.student.create');
    }

    public function store(){


    }

}
