<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'PUBG Mobile',
            'slug' => 'pubg-mobile',
            'color' => 'brown',
            'point' => 'UC',
            'img' => 'pubgm.jpg'
        ]);

        Category::create([
            'name' => 'Mobile Legends',
            'slug' => 'mobile-legends',
            'color' => 'blue',
            'point' => 'diamonds',
            'img' => 'ml.png'
        ]);

        Category::create([
            'name' => 'Valorant',
            'slug' => 'valorant-valo',
            'color' => 'red',
            'point' => 'Valorant Points',
            'img' => 'valo.png'

        ]);

        Category::create([
            'name' => 'Marvel Rivals',
            'slug' => 'marvel-rivals',
            'color' => 'yellow',
            'point' => 'lattices',
            'img' => 'marvel.jpg'
        ]);
    }
}
