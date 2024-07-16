<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('contact-us', 'contact')->name('contact-us');
Route::view('about-us', 'about')->name('about-us');
Route::view('giftcards', 'giftcards')->name('giftcards');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//require __DIR__.'/auth.php';
