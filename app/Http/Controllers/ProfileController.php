<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return view('dashboard.profile.index', [
            'title' => 'Profile',
            'user' => $user
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function show(User $user) {


    // }

    public function edit(User $user) {

        return view('dashboard.profile.edit', [
            'title' => 'Edit Profile',
            'user' => $user
        ]
    );
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|min:5|max:1000',
            'address' => 'nullable',
            'picture' => 'nullable|image|file|max:5120'
        ];

        if ($request->phone != $user->phone) {
            $rules['phone'] = 'nullable|unique:users';
        }
        $validate = $request->validate($rules);

        if ($request->file('picture')) {
            if ($user->picture) {
            Storage::delete($user->picture);
            $validate['picture'] = $request->file('picture')->store('profile-pictures');
        } else {
            $validate['picture'] = $request->file('picture')->store('profile-pictures');
        }
        } 

       $user->update($validate);
       return redirect('/dashboard/profile')->with('success', 'Edit Profile Success!');
    } 

    public function destroy(User $user)
    {
         if ($user->picture) {
            User::where('id', $user->id)->update(['picture' => null]);
            Storage::disk('public')->delete($user->picture);
        } else {
            return back()->withErrors([
                'error' => 'there is no profile picture!',
            ]);
        }

        return redirect('/dashboard/profile')->with('success', 'Profile picture has been deleted!');
    }




}
