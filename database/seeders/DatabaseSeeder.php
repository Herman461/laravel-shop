<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Banner::factory(5)->create();

        Category::factory(3)->create()
        ->each(function ($category) {
            $products = Product::factory(30)->make();

            $category->products()->createMany($products->toArray());
        });

        Attribute::factory(20)
            ->create()
            ->each(function($attribute) {
                $randomOptionCount = random_int(1, 5);

                $options = AttributeOption::factory($randomOptionCount)->make();

                $attribute->attributeOptions()->saveMany($options);
            });
    }
}
