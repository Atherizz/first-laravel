<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {

        return view('login.index', [
            'title' => 'Login'
        ]
    );
    }

    public function authenticate(Request $request) {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'login' => 'login failed',
        ]);
    }

    public function logout(Request $request) {
    Auth::logout();
 
    $request->session()->invalidate();
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
