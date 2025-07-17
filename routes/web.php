<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart']);

// Route::get('/products', function () {
//     return 'Ini Adalah Route Produk';
// });

// Route::get('/cart', function () {
//     return 'Ini Adalah Route Keranjang';
// });

Route::get('/coba',[ContohController::class,'coba']);

Route::get('/contoh', [ContohController::class, 'index']);

Route::resource('produk', ProductController::class);


