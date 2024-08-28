<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('admin.pages.session.index');
    }

    public function create(){
        return view('admin.pages.session.create');
    }

    public function store(){


    }
}
