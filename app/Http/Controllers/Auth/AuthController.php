<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email','exists:users,email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials) && Auth::user()->role_type === 'admin') {
            return redirect('/admin/dashboard');
        }
        return redirect('admin/login');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

//        $request->session()->invalidate();
//
//        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
