<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index() {
        $products = Product::inRandomOrder()->limit(6)->get();

        return view('pages.catalog', ['products' => $products]);
    }
}
