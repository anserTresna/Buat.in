<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function index(){
        return view('autentikasi.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
        'email' => ['required', 'email:dns'],
        'password' => ['required']
    ]);

    if (Auth::attempt($credentials)) {
    $request->session()->regenerate();
            if (auth()->user()->role === 'seller') {
                // jika user seller
                return redirect()->intended('/seller');
            } elseif (auth()->user()->role === 'admin') {
                // jika user admin
                return redirect()->intended('/admin');
                // jika user biasa
            } else {
    return redirect()->intended('/');
    }
}

    return back()->with('loginError', 'Email atau password yang dimasukkan salah!');
    }

    public function logout(Request $request)
    {
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/login');
    }
}

