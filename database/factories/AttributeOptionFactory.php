<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttributeOption>
 */
class AttributeOptionFactory extends Factory
{
    public static $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        self::$index += 1;

        return [
            'value' => 'option #' . self::$index
        ];
    }
}
