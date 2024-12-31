<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;

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
            'body' => 'required|min:5|max:1000',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'author_id' => 'required',
            'picture' => 'nullable|image|file|max:5120'
        ]);

        if ($request->file('picture')) {
            $validate['picture'] = $request->file('picture')->store('post-pictures');
        } 

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
            'author_id' => 'required',
            'picture' => 'nullable|image|file|max:5120'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

       $validate = $request->validate($rules);

       if ($request->file('picture')) {
        if ($post->picture) {
        Storage::delete($post->picture);
        $validate['picture'] = $request->file('picture')->store('post-pictures');
        } else {
        $validate['picture'] = $request->file('picture')->store('post-pictures');
        }
    } 

       $post->update($validate);
        return redirect('/dashboard/posts')->with('success', 'Edit Blog Success!');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->picture) {
            Storage::disk('public')->delete($post->picture);
        } 
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Blog has been deleted!');
    }

    public function truncate()
    {
        Post::truncate();
        return redirect('/dashboard/posts')->with('success', 'All Blog has been deleted!');
    }
}
