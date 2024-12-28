<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]
    );
    }

    public function posts() {

        return view('dashboard.posts', [
            'title' => 'Manage Blog',
            'posts' => Post::all(),
            'category' => Category::all()
        ]
    );
    }
    public function pricelist() {

        return view('dashboard.pricelist', [
            'title' => 'Manage Pricelist'
        ]
    );
    }
    public function order() {

        return view('dashboard.order', [
            'title' => 'Manage Order'
        ]
    );
    }

}
