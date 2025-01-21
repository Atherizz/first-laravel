<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return view(
            'dashboard.order.index',
            [
                'title' => 'Manage Order',
                'order' => Order::all()

            ]
        );
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'value' => 'required',
            'price' => 'required',
            'username' => 'required',
            'email' => 'required',
            'status' => 'required',
            'user_id' => 'required',
            'category_id' => 'required'
        ]);

        $order = Order::create($validate);

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id, 
                'gross_amount' => $order->price,
            ),
            'customer_details' => array(
                'first_name' => $order->user->name,
                'last_name' => '',
                'email' => $order->user->email,
                'phone' => $order->user->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $order->update(['snap_token' => $snapToken]);
        return view('cart',[
            'title' => 'Order Cart',
            'order' => $order,
            'snapToken' => $snapToken
            ]);
    }

    public function callback(Request $request) {
        $serverKey = config('midtrans.server_key');
        $grossAmount = floatval($request->gross_amount);
        $orderId = $request->order_id;
        $statusCode = $request->status_code;
        $grossAmount = $request->gross_amount;
        $hashed = hash('sha512', $orderId . $statusCode . $grossAmount . $serverKey);

        

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'paid']);
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view(
            'invoice',
            [
                'title' => 'Invoice',
                'order' => $order
            ]
        );
    }
}
