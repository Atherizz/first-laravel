<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Category;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pricelist.index', [
            'title' => 'Manage Pricelist',
            'prices' => Price::all(),
            'category' => Category::all()
        ]
    );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_game' => 'required',
            'value' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        Price::create($validate);
        return redirect('/dashboard/pricelist')->with('success', 'Add Pricelist Success!');

    }

    public function edit(int $id)
    {

   $price = Price::findOrFail($id); 

   return view('dashboard.pricelist.edit', [
       'title' => 'Edit Price',
       'price' => $price, 
       'category' => Category::all(),
   ]);
    }

    public function update(Request $request, int $id)
    {
        $validate = $request->validate([
            'id_game' => 'required',
            'value' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $price = Price::find($id);
        $price->update($validate);

        return redirect('/dashboard/pricelist')->with('success', 'Edit Pricelist Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        Price::destroy($price->id);
        return redirect('/dashboard/pricelist')->with('success', 'Pricelist has been deleted!');
    }
}
