<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'description' => fake()->sentence(20, true),
            'imageUrl' => fake()->imageUrl(350, 350),
            'quantity' => fake()->numberBetween(0, 1000),
            'price' => fake()->numberBetween(100, 10000),
            'sku' => fake()->word()
        ];
    }
}
