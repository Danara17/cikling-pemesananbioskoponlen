<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        // $pelanggan = new Pelanggan;
        // $previousUrl = url()->previous();
        // dd($previousUrl);
        // die();

        $credentials = $request->only('username', 'password');


        $user = Pelanggan::where('username', $credentials['username'])->first();

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            $request->session()->put('user', $user);
            return redirect()->intended('/');
        }
        // dd('gagal login');
        // die();
        // Jika autentikasi gagal
        return redirect('/login')->with('error', 'username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}