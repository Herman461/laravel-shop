<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Banner;
use App\Models\Product;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Banner::factory(5)->create();
        Product::factory(50)->create();

        Attribute::factory(20)
            ->create()
            ->each(function($attribute) {
                $randomOptionCount = random_int(1, 5);

                $options = AttributeOption::factory($randomOptionCount)->make();

                $attribute->attributeOptions()->saveMany($options);
            });
    }
}
