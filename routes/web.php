<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Price;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    $data = ['name' => 'Savero Athallah','title' => 'About Page'];
    return view('about', compact('data'));
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Check Our Blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
        // $post =  Post::find($slug);
        return view('post', ['title' => 'Article', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact'] );
});

Route::get('/pricelist', function () {
    return view('pricelist',['title' => 'Pricelist', 'prices' => Price::all()]);
});

Route::get('/authors/{user:username}', function(User $user) {
    // $posts =  $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    // $posts =  $category->posts->load('category', 'author');
    return view('posts', ['title' => 'Category : ' . $category->name, 'posts' => $category->posts]);
});