<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderForm(Request $request)
{
    $game = $request->get('game');
    $info = [];
    $price = Price::all()->groupBy('id_game');

    // Data nominal poin berdasarkan game
    if ($game == 'valorant') {
        $info = $price[2];
    } elseif ($game == 'mobile-legend') {
        $info = $price[1];
    } elseif ($game == 'pubg-mobile') {
        $info = $price[0];
    } elseif ($game == 'marvel-rivals') {
        $info = $price[3];
    }

    return view('pricelist', compact('info', 'game'));
}

}
