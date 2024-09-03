<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefermentController extends Controller
{
    public function index(){
        return view('admin.pages.deferment.index');
    }

    public function create()
    {
        return view('admin.pages.deferment.create');
    }
 
}
