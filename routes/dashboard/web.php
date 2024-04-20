<?php

use App\Http\Controllers\Dashboard\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Dashboard\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


//Route::middleware('guest:admin')->group(function () {
Route::group(['middleware' => ['guest:admin'], 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {


});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
//    Route::get('/products', [\App\Http\Controllers\Dashboard\ProductController::class, 'index'])->name('index');

    Route::resource('products', \App\Http\Controllers\Dashboard\ProductController::class);
    Route::resource('items', \App\Http\Controllers\Dashboard\ItemController::class);

    Route::get('/', function () {
        return view('dashboard.pages.dashboard2');
    })->name('home');
    Route::get('/tables', function () {
        return view('dashboard.pages.tables2');
    })->name('tables');
});
