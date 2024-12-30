<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        return view('dashboard.posts.index', [
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

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.post', [
            'post' => $post
        ]
    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Edit Blog',
            'post' => $post,
            'category' => Category::all(),
            'author' => User::all()
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required|min:5|max:1000',
            'category_id' => 'required',
            'author_id' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

       $validate = $request->validate($rules);

       $post->update($validate);

        return redirect('/dashboard/posts')->with('success', 'Edit Blog Success!');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Blog has been deleted!');
    }
}
