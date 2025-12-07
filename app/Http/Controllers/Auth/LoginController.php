<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // عرض نموذج تسجيل الدخول
    public function showLogin()
    {
        return view('auth.login'); // Blade: resources/views/auth/login.blade.php
    }

    // معالجة تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'بيانات الدخول غير صحيحة.');
    }
}
