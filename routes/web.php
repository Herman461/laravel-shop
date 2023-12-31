<?php


use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home.page');

Route::controller(CatalogController::class)->group(function() {
    Route::get(
        '/catalog/{slug?}',
        'index'
    )->name('catalog.page');

    Route::post(
      '/products/filter',
      'filterProducts'
    );
});


Route::post(
    '/user/store',
    [UserController::class, 'store']
)->name('user.store');


Route::view(
    'user/register',
    'user.register'
)->name('register');
// Route::get('/')

//Route::view('/catalog', 'pages.catalog');
//Route::view('/', 'pages.home');
