<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function halaman_login()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'username wajib diisi!',
            'password.required' => 'password wajib diisi!',
        ]);

        $datauser = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($datauser)) {
            if (Auth::user()->role == "admin") {
                // return redirect('./admin/beranda');
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            } else {
                // Untuk generate session ID baru
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }
        } else {
            // Arahkan dia kembali ke halaman login jika username/passwordnya salah
            return redirect('/login')->withErrors('Username atau password yang anda ketikkan salah')->onlyInput('username');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // untuk membuat sessionID yang tadi dipakai jadi tidak valid
        $request->session()->invalidate();

        // Untuk menggenerate ulang SessionID
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
