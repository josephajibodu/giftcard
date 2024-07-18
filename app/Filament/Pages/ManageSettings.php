<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Pages\SettingsPage;

class ManageSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('btc_wallet_address')
                    ->label('BTC Deposit Wallet Address')
                    ->required(),

                TextInput::make('eth_wallet_address')
                    ->label('ETH Deposit Wallet Address')
                    ->required(),

                TextInput::make('cash_app_id')
                    ->label('CashApp ID')
                    ->required(),
            ])
            ->columns(1);
    }
}
