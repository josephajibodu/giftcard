<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.btc_wallet_address', '');
        $this->migrator->add('general.eth_wallet_address', '');
        $this->migrator->add('general.usdt_wallet_address', '');
        $this->migrator->add('general.receiving_email', ['support@giftvalidator.com']);
    }
};
