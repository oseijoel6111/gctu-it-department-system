<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectWorkController extends Controller
{
    public function index(){
        return view('admin.pages.projectWork.index');
    }

    public function create()
    {
        return view('admin.pages.projectWork.create');
    }
 
}
