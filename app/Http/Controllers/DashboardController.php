<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index() {

        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]
    );
    }

    public function posts() {

        return view('dashboard.posts.posts', [
            'title' => 'Manage Blog',
            'posts' => Post::paginate(5),
            'category' => Category::all()
        ]
    );
    }

    public function create() {

        return view('dashboard.posts.create', [
            'title' => 'Insert Blog',
            'category' => Category::all(),
            'author' => User::all()
        ]
    );
    }

    public function store(Request $request) {

        $validate = $request->validate([
            'title' => 'required',
            'body' => 'required|min:5|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'author_id' => 'required'
        ]);

        Post::create($validate);
        return redirect('/dashboard/posts')->with('success', 'Add Blog Success!');
        
    }

    public function pricelist() {

        return view('dashboard.pricelist.pricelist', [
            'title' => 'Manage Pricelist'
        ]
    );
    }
    public function order() {

        return view('dashboard.order.order', [
            'title' => 'Manage Order'
        ]
    );
    }

}
