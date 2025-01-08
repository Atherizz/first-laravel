<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Ramsey\Uuid\Type\Time;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

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
            'name' => 'required',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:5|max:255|confirmed'
        ]);

        $validate['remember_token'] = Str::random(60);
        // $validate['email_verified_at'] = Carbon::now()->format('Y-m-d H:i:s');

        $validate['password'] = Hash::make($validate['password']);
        $user = User::create($validate);

        Auth::login($user);
        event(new Registered($user));

        return redirect('/dashboard');

        // $request->session()->put('success', 'Registration success!');
        
    }

}
