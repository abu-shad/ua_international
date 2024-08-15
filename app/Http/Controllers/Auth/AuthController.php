<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
    }

    public function register()
    {
        return view('backend.auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->withSuccess('You have logged out successfully!');;
    }
}
