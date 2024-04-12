<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about'); 
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/help', [PageController::class, 'help'])->name('help'); 
Route::get('/user-terms', [PageController::class, 'userterms'])->name('user-terms');
Route::get('/item-detail/{itemId}', [PageController::class, 'itemdetail'])->name('item-detail');
Route::get('/cart', [PageController::class, 'cart'])->name('cart'); 
Route::get('/shopping-cart', [PageController::class, 'shoppingcart'])->name('shopping-cart'); 
Route::get('/categories/{categoryId}', [PageController::class, 'categories'])->name('categories');
Route::get('/client-data', [PageController::class, 'clientdata'])->name('client-data'); 
Route::get('/received', [PageController::class, 'received'])->name('received'); 
Route::get('/payment-details', [PageController::class, 'paymentdetail'])->name('payment-details');
Route::get('/trending', [PageController::class, 'trending'])->name('trending'); 
Route::get('/shop', [PageController::class, 'shop'])->name('shop'); 
Route::get('/designyourown', [PageController::class, 'shop'])->name('design-your-own'); 

?>