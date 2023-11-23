<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    private static $bannerIndex = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $banners = Storage::disk('public')->allFiles('images/home/banners');
        return [
            'title' => ucfirst(fake()->words(7, true)),
            'description' => fake()->sentence(10),
            'imageUrl' => $banners[self::$bannerIndex++]
        ];
    }
}
