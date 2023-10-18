<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->route('providers.index');
        }
        
        return redirect()->back()->withErrors([
            'message' => 'Bad credentials. Please try again'
        ]);
    }

    public function showLogin()
    {
        return view('auth.login');        
    }
}
