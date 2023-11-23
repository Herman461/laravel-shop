<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index() {
        $banners = Banner::all();
        return view('pages.home', ['banners' => $banners]);
    }

    public function getBanners() {

    }
}
