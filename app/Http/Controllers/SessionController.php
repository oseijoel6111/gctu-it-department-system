<?php

namespace App\Http\Controllers;

use App\Models\StudentSession;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = StudentSession::all();
        return view('admin.pages.session.index')->with(['sessions' => $sessions]);
    }

    public function create()
    {
        return view('admin.pages.session.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'session' => ['string', 'required']
            ]
        );

        StudentSession::create([
            'session_name' => $request->get('session')
        ]);

        return redirect()->to(route('admin.session.index'));
    }
}
