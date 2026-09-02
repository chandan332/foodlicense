<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class AdminLogin extends Component
{
    public string $email = '';

    public string $password = '';

    public function login(): void
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $credentials['email'] = strtolower(trim($credentials['email']));

        if (! Auth::guard('admin')->attempt($credentials)) {
            $this->addError('email', 'The provided credentials are incorrect.');

            return;
        }

        request()->session()->regenerate();
        $this->redirectRoute('admin.dashboard', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin-login')
            ->layout('layouts.admin', ['title' => 'Admin Login | Legal Expert India']);
    }
}
