<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftcardController extends Controller
{
    public function index()
    {
        return view('giftcards.index', [
            'giftcards' => config('giftcards')
        ]);
    }

    public function show(string $name)
    {
        $action = request()->query('action', 'purchase');

        // Retrieve all gift cards from the config
        $giftcards = config('giftcards');

        // Search for the gift card with the given $name
        $giftcard = collect($giftcards)->firstWhere('slug', $name);

        return view('giftcards.show', [
            'giftcard' => $giftcard,
            'payment_options' => config('payment-options')
        ]);
    }
}
