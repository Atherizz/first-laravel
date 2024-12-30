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

}
