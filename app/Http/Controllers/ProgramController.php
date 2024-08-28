<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('admin.pages.program.index');
    }

    public function create(){
        return view('admin.pages.program.create');
    }

    public function store(){


    }
}
