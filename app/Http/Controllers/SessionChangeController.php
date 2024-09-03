<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionChangeController extends Controller
{
    public function index(){
        return view('admin.pages.sessionChange.index');
    }

    public function create()
    {
        return view('admin.pages.sessionChange.create');
    }
 
}
