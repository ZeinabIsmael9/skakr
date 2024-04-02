<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/userterms', function () {
    return view('user-terms');
});

Route::get('/itemdetail', function () {
    return view('item-detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/shoppingcart', function () {
    return view('shopping-cart');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/client-data', function () {
    return view('client-data');
});


Route::get('/received', function () {
    return view('received');
});

Route::get('/payment-details', function () {
    return view('payment-details');
});

Route::get('/trending', function () {
    return view('trending');
});
