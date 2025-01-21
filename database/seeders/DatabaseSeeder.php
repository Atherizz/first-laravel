<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Price;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PriceSeeder::class,
            PostSeeder::class
        ]);

        // Post::factory(20)->recycle
        //     ([ 
        //     User::all(),
        //     Category::all()
        //     ])->create();    

        // Price::factory(count: 32)->recycle
        //     ([
        //     Category::all()
        //     ])->create();

    }
}
