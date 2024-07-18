<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    public string $btc_wallet_address;

    public string $eth_wallet_address;

    public string $cash_app_id;

    public static function group(): string
    {
        return 'general';
    }
}