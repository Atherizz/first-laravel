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

        return view('dashboard.posts.posts', [
            'title' => 'Manage Blog',
            'posts' => Post::paginate(4),
            'category' => Category::all()
        ]
    );
    }

    public function insert() {

        return view('dashboard.posts.insert', [
            'title' => 'Insert Blog',
        ]
    );
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
