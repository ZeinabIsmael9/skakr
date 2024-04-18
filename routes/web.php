<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard2', function () {
    return view('dashboard2');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
// Create Your Piece
Route::get('/create-your-piece', [PageController::class, 'createYourPiece2'])->name('create-your-piece');
//Route::get('/create-your-piece2', [PageController::class, 'createYourPiece2'])->name('create-your-piece2');

Route::post('/item-detail/{itemId}/save-review', [PageController::class, 'saveReview'])->name('item-detail.save-review');
Route::post('/contact', [PageController::class, 'contact'])->name('contact.post');

Route::get('/add-item-to-cart/{itemId}', [\App\Http\Controllers\CartController::class, 'store'])->name('add-item-to-cart');
Route::get('/subtract-item-from-cart/{itemId}', [\App\Http\Controllers\CartController::class, 'subtract'])->name('subtract-item-from-cart');

Route::post('/order', [\App\Http\Controllers\OrderController::class, 'store'])->name('order');
Route::post('/order-cutom', [\App\Http\Controllers\OrderController::class, 'storeCutom'])->name('order-cutom');
require __DIR__.'/auth.php';

?>
