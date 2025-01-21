<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            // PUBG Mobile (id_game: 1)
            [
                'id_game' => 1,
                'value' => '60 UC',
                'price' => 15000
            ],
            [
                'id_game' => 1,
                'value' => '180 UC',
                'price' => 45000
            ],
            [
                'id_game' => 1,
                'value' => '300 UC',
                'price' => 75000
            ],
            [
                'id_game' => 1,
                'value' => '600 UC',
                'price' => 150000
            ],
            [
                'id_game' => 1,
                'value' => '900 UC',
                'price' => 225000
            ],
            [
                'id_game' => 1,
                'value' => '1500 UC',
                'price' => 375000
            ],
            [
                'id_game' => 1,
                'value' => '2100 UC',
                'price' => 525000
            ],
            [
                'id_game' => 1,
                'value' => '3000 UC',
                'price' => 750000
            ],
            [
                'id_game' => 1,
                'value' => '4200 UC',
                'price' => 1050000
            ],
            [
                'id_game' => 1,
                'value' => '6000 UC',
                'price' => 1500000
            ],
            [
                'id_game' => 1,
                'value' => '8400 UC',
                'price' => 2100000
            ],
            [
                'id_game' => 1,
                'value' => '12000 UC',
                'price' => 3000000
            ],

            // Mobile Legends (id_game: 2)
            [
                'id_game' => 2,
                'value' => '86 Diamonds',
                'price' => 20000
            ],
            [
                'id_game' => 2,
                'value' => '172 Diamonds',
                'price' => 40000
            ],
            [
                'id_game' => 2,
                'value' => '257 Diamonds',
                'price' => 60000
            ],
            [
                'id_game' => 2,
                'value' => '344 Diamonds',
                'price' => 80000
            ],
            [
                'id_game' => 2,
                'value' => '429 Diamonds',
                'price' => 100000
            ],
            [
                'id_game' => 2,
                'value' => '514 Diamonds',
                'price' => 120000
            ],
            [
                'id_game' => 2,
                'value' => '706 Diamonds',
                'price' => 150000
            ],
            [
                'id_game' => 2,
                'value' => '878 Diamonds',
                'price' => 200000
            ],
            [
                'id_game' => 2,
                'value' => '1050 Diamonds',
                'price' => 250000
            ],
            [
                'id_game' => 2,
                'value' => '1412 Diamonds',
                'price' => 300000
            ],
            [
                'id_game' => 2,
                'value' => '2195 Diamonds',
                'price' => 450000
            ],
            [
                'id_game' => 2,
                'value' => '3688 Diamonds',
                'price' => 750000
            ],

            // Valorant (id_game: 3)
            [
                'id_game' => 3,
                'value' => '300 Points',
                'price' => 35000
            ],
            [
                'id_game' => 3,
                'value' => '420 Points',
                'price' => 50000
            ],
            [
                'id_game' => 3,
                'value' => '700 Points',
                'price' => 80000
            ],
            [
                'id_game' => 3,
                'value' => '1025 Points',
                'price' => 120000
            ],
            [
                'id_game' => 3,
                'value' => '1375 Points',
                'price' => 150000
            ],
            [
                'id_game' => 3,
                'value' => '2400 Points',
                'price' => 250000
            ],
            [
                'id_game' => 3,
                'value' => '3400 Points',
                'price' => 350000
            ],
            [
                'id_game' => 3,
                'value' => '4800 Points',
                'price' => 500000
            ],
            [
                'id_game' => 3,
                'value' => '7000 Points',
                'price' => 750000
            ],
            [
                'id_game' => 3,
                'value' => '8900 Points',
                'price' => 950000
            ],
            [
                'id_game' => 3,
                'value' => '12000 Points',
                'price' => 1250000
            ],
            [
                'id_game' => 3,
                'value' => '15000 Points',
                'price' => 1500000
            ],

            // Marvel Rivals (id_game: 4)
            [
                'id_game' => 4,
                'value' => '100 Tokens',
                'price' => 15000
            ],
            [
                'id_game' => 4,
                'value' => '300 Tokens',
                'price' => 45000
            ],
            [
                'id_game' => 4,
                'value' => '600 Tokens',
                'price' => 85000
            ],
            [
                'id_game' => 4,
                'value' => '1000 Tokens',
                'price' => 140000
            ],
            [
                'id_game' => 4,
                'value' => '1200 Tokens',
                'price' => 160000
            ],
            [
                'id_game' => 4,
                'value' => '2000 Tokens',
                'price' => 250000
            ],
            [
                'id_game' => 4,
                'value' => '3000 Tokens',
                'price' => 375000
            ],
            [
                'id_game' => 4,
                'value' => '4500 Tokens',
                'price' => 550000
            ],
            [
                'id_game' => 4,
                'value' => '6000 Tokens',
                'price' => 725000
            ],
            [
                'id_game' => 4,
                'value' => '8000 Tokens',
                'price' => 950000
            ],
            [
                'id_game' => 4,
                'value' => '10000 Tokens',
                'price' => 1150000
            ],
            [
                'id_game' => 4,
                'value' => '15000 Tokens',
                'price' => 1650000
            ],
        ];

        DB::table('prices')->insert($prices);
    }
}