<?php

namespace App\Filament\Pages;

use Filament\Forms;

class Login extends \Filament\Pages\Auth\Login
{
    protected function getEmailFormComponent(): Forms\Components\Component
    {
        return Forms\Components\TextInput::make('email')
            ->label(__('filament-panels::pages/auth/login.form.email.label'))
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->default('test.user@example.com')
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getPasswordFormComponent(): Forms\Components\Component
    {
        return Forms\Components\TextInput::make('password')
            ->label(__('filament-panels::pages/auth/login.form.password.label'))
            ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()" tabindex="3"> {{ __(\'filament-panels::pages/auth/login.actions.request_password_reset.label\') }}</x-filament::link>')) : null)
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->autocomplete('current-password')
            ->required()
            ->default('password')
            ->extraInputAttributes(['tabindex' => 2]);
    }
}
