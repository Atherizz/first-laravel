<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.category.index', [
            'title' => 'Manage Category',
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
            'name' => 'required | unique:categories',
            'slug' => 'required | unique:categories',
            'color' => 'required | unique:categories',
            'point' => 'required | unique:categories',
            'img' => 'nullable|image|file|max:5120'
        ]);

        if ($request->file('img')) {
            $validate['img'] = $request->file('img')->store('category-pictures');
        } 

        Category::create($validate);
        return redirect('/dashboard/category')->with('success', 'Add Category Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->img) {
            Storage::disk('public')->delete($category->img);
        } 
        Category::destroy($category->id);
        return redirect('/dashboard/category')->with('success', 'Category has been deleted!');
    }
}
