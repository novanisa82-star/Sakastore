<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Memproses data login
     */
    public function login(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // 2. Coba Login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 3. Cek Role User
            if (Auth::user()->role === 'admin') {
                // Kalau admin ke dashboard admin
                return redirect()->intended('/admin/dashboard');
            }

            // Kalau user biasa ke halaman utama (sesuaikan path-nya)
            return redirect('/'); 
        }

        // 4. Kalau gagal login
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    /**
     * Fungsi Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}