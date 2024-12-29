<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Price;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/order-form', [OrderController::class, 'orderForm'])->name('order.form');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts', [DashboardController::class, 'posts'])->middleware('auth');
Route::post('/dashboard/posts', [DashboardController::class, 'store'])->middleware('auth');
Route::get('/dashboard/posts/create', [DashboardController::class, 'create'])->middleware('auth');


Route::get('/dashboard/pricelist', [DashboardController::class, 'pricelist'])->middleware('auth');

Route::get('/dashboard/order', [DashboardController::class, 'order'])->middleware('auth');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/order', function () {
    return view('order',  ['name' => 'Savero Athallah','title' => 'Order Page', 'info' => Price::all()]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Check Our Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(14)->withQueryString()]);
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