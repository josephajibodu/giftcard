<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSetting;
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

        // Get the GeneralSetting instance
        $generalSettings = app(GeneralSetting::class);

        // Retrieve all gift cards from the config
        $giftcards = config('giftcards');

        // Search for the gift card with the given $name
        $giftcard = collect($giftcards)->firstWhere('slug', $name);

        // Get the payment options
        $paymentOptions = config('payment-options');

        // Update the addresses for BTC, ETH, and CashApp
        $paymentOptions = collect($paymentOptions)->map(function ($option) use ($generalSettings) {
            if ($option['slug'] === 'btc') {
                $option['address'] = $generalSettings->btc_wallet_address;
            } elseif ($option['slug'] === 'eth') {
                $option['address'] = $generalSettings->eth_wallet_address;
            } elseif ($option['slug'] === 'usdt') {
                $option['address'] = $generalSettings->usdt_wallet_address;
            } elseif ($option['slug'] === 'cashapp') {
                $option['address'] = $generalSettings->cash_app_id;
            }
            return $option;
        })->toArray();

        return view('giftcards.show', [
            'giftcard' => $giftcard,
            'payment_options' => $paymentOptions,
            'fee' => PurchaseGiftcardController::$FEE
        ]);
    }
}
