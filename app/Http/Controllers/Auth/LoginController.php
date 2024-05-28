<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Proses login, validasi, dan autentikasi bisa ditambahkan di sini
        // Untuk saat ini kita hanya akan redirect ke home setelah login
        return redirect()->route('home');
    }
}
