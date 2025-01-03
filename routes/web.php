<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Price;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PricelistController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/dashboard/posts/createSlug', [PostController::class, 'createSlug']);

Route::get('/order-form', [OrderController::class, 'orderForm'])->name('order.form');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');
Route::get('/dashboard/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/dashboard/profile/{user}/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/profile/{user}', [ProfileController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/profile/{user}', [ProfileController::class, 'destroy'])->middleware('auth');

Route::resource('/dashboard/posts', PostController::class)->middleware('auth');
Route::delete('/dashboard/posts', [PostController::class, 'truncate'])->middleware('auth');


Route::resource('/dashboard/category', AdminController::class)->middleware('admin');




Route::get('/dashboard/pricelist', [PricelistController::class, 'index'])->middleware('admin');

Route::get('/dashboard/order', [OrderController::class, 'index'])->middleware('admin');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/game', function () {
    return view('game',  [
    'title' => 'Game List', 'category' => Category::all(), 'price' => Price::all()]);
});


Route::get('/game/order/{category:slug}', function (Category $category) {
    return view('order',  [
    'title' => $category->name,
    'price' => $category->prices,
    'name' => 'Savero Athallah',
    'point' => $category->point]);
});
Route::post('/game/order', [OrderController::class, 'store']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Check Our Purchase Review', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(4)->withQueryString()]);
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
