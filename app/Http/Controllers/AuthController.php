<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('frontend.auth.login');
    }

    public function register(){
        return view('frontend.auth.register');
    }

    public function forgetPassword(){
        return view('frontend.auth.forget-password');
    }

    public function verification(){
        return view('frontend.auth.verify-email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        session()->flash('toast-message', 'Logged Out');

        return redirect('auth');
    }
}
