<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function login(){
        return view('auth.login');
    }

    public function signup(){
        return view('auth.register');
    }
}
