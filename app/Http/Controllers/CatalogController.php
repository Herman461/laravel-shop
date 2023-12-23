<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(?string $slug = '') {

        $category = Category::query()
            ->where('slug', '=', $slug)
            ->first();

        $products = $category->products()
            ->select(['title', 'imageUrl', 'slug'])
            ->paginate(10);

        return view('pages.catalog', compact('products'));
    }
}
