<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // تحقق من البيانات
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // إنشاء المستخدم
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => 0, // حساب غير مفعل بعد، للاعتماد على الصلاحيات
        ]);

        // إعادة توجيه مع رسالة نجاح
        return redirect()->route('login')->with('success', 'تم التسجيل بنجاح، في انتظار إعطائك الصلاحيات.');
    }
}
