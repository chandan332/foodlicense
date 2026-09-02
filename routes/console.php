<?php

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:create {email?}', function (?string $email = null): int {
    $email ??= $this->ask('Administrator email');
    $password = $this->secret('Administrator password');

    validator(['email' => $email, 'password' => $password], [
        'email' => ['required', 'email'],
        'password' => ['required', 'string', 'min:8'],
    ])->validate();

    Admin::query()->updateOrCreate(['email' => strtolower(trim($email))], ['password' => Hash::make($password)]);

    $this->info('Administrator account is ready.');

    return Command::SUCCESS;
})->purpose('Create or update an administrator account');
