<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('admin.pages.program.index');
    }

    public function create(){
        return view('admin.pages.program.create');
    }

    public function store(Request $request){
        $request->validate([
            'programName' =>['string', 'required'],
            'description' => ['string', 'required'],
        ]);

        Program::create([
            'program_name' => $request->get('programName'),
            'description' => $request->get('description')
        ]);

        return redirect()->to(route('admin.program.index'));
    }
}
