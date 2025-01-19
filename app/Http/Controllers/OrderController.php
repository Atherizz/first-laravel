<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index() {
        return view('dashboard.order.index', [
            'title' => 'Manage Order',
            'order' => Order::all()
        ]
    );
    }

    public function store(Request $request) {
        // dd($request->all());

        $validate = $request->validate([
            'game' => 'required',
            'value' => 'required',
            'price' => 'required',
            'username' => 'required',
            'email' => 'required',
            'status' => 'required',
            'user_id' => 'required'
        ]);

        Order::create($validate);
        return redirect('/cart')->with('success', 'Order Success, please pay the order early!');
    }



}
