<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(){
        $credentials = request()->validate([
            'email_login' => 'required|email',
            'password' => 'required'
        ]);
        $remember = request('remember');

        if (Auth::attempt($credentials, $remember)) {
            request()->session()->regenerate();

            return redirect('/');
        } else {
            return back()->withErrors([
                'login' => 'Usuario o contraseña erroneo',
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}