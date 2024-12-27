<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {

        return view('register.index', [
            'title' => 'Register'
        ]
    );
    }

    public function store(Request $request) {

        $validate = $request->validate([
            'email' => 'required|unique:users|email',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:5|max:255|confirmed', "confirmed"
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);

        $request->session()->put('success', 'Registration success!');
        return redirect('/login');
        
    }

}
