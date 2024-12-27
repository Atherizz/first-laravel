<?php

namespace Database\Factories;

use App\Models\Category;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'id_game' => Category::factory(), // Simpan ID kategori
            'value' =>  fake()->numberBetween(10, 1000), 
            'price' => fake()->randomNumber(6, true),
        ];
    }
}
