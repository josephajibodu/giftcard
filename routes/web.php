<?php

use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\PurchaseGiftcardController;
use App\Http\Controllers\ValidateGiftcardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('contact-us', 'contact')->name('contact-us');
Route::view('about-us', 'about')->name('about-us');

Route::get('giftcards', [GiftcardController::class, 'index'])->name('giftcards.index');
Route::get('giftcards/{name}', [GiftcardController::class, 'show'])->name('giftcards.show');

Route::post('giftcards/{name}/purchase', [PurchaseGiftcardController::class, 'store'])->name('giftcards.purchase');
Route::post('giftcards/{name}/validate', [ValidateGiftcardController::class, 'store'])->name('giftcards.validate');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//require __DIR__.'/auth.php';
