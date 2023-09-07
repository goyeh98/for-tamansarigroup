<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil login. Selamat datang ' . Auth::user()->name . '.</span></div></div>');
        }

        return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>Username atau password salah!</div></div>')->withInput();
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil logout.</div></div>');
    }
}
