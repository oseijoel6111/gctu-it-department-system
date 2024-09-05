<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to dashboard
            return redirect()->route('dashboard');
        }

        // Authentication failed, redirect back to login with error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
use Illuminate\Support\Facades\Auth;

// class AuthController extends Controller
// {
    
// }

