<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{


    public function index(?string $slug = '') {

        $category = Category::query()->findBySlug($slug);

        $products = $category->products()
            ->select(['title', 'imageUrl', 'slug'])
            ->paginate(10);

        $maxPrice = $category->products()->max('price');
        $minPrice = $category->products()->min('price');

        return view(
            'pages.catalog',
            compact('products', 'maxPrice', 'minPrice', 'slug')
        );
    }

    public function filterProducts(Request $request) {
        $bodyContent = $request->all();

        $minPrice = $bodyContent['minPrice'];
        $maxPrice = $bodyContent['maxPrice'];
        $slug = $bodyContent['slug'];

        $category = Category::query()->findBySlug($slug);

        $products = $category->products()
            ->select(['title', 'imageUrl', 'slug'])
            ->where([
                ['price', '>=', $minPrice],
                ['price', '<=', $maxPrice]
            ])
            ->paginate(10);

        return $products;
    }
}
