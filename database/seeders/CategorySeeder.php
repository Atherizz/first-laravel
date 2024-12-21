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
            'slug' => 'pubg-mobile'
        ]);

        Category::create([
            'name' => 'Mobile Legends',
            'slug' => 'mobile-legends'
        ]);

        Category::create([
            'name' => 'Valorant',
            'slug' => 'valorant-valo'
        ]);
    }
}
