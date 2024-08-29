<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(){

        return view('admin.pages.courses.index');
    }

    public function create(){
        $programs = Program::all();
        return view('admin.pages.courses.create')->with(['programs'=> $programs]);
    }

    public function store(Request $request){
        $request->validate([
            'code' => ['required', 'string'],
            'name'=> ['string', 'required'],
            'program'=> ['string', 'required'],
            'credits'=> ['string', 'required'],
            'semester'=> ['string', 'required']
        ]);

        Course::create([
            'course_code' => $request->get('code'),
            'course_name' => $request->get('name'),
            'program_id' => $request->get('program'),
            'credits' => $request->get('credits'),
            'semester'=> $request->get('semester')
        ]);

        return redirect()->to(route('admin.course.index'));
    }

}
