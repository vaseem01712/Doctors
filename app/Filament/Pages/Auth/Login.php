<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseLogin;

class Login extends BaseLogin
{
    protected static string $view = 'filament.pages.auth.login';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->autocomplete('email')
                    ->autofocus(),

                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    ->required()
                    ->autocomplete('current-password'),

                Checkbox::make('remember')
                    ->label('Remember me'),
            ])
            ->statePath('data');
    }

    public function getTitle(): string
    {
        return 'MediCare Admin';
    }

    public function getHeading(): string
    {
        return 'Sign in';
    }
}
