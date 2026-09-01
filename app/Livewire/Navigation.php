<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Navigation extends Component
{
    public bool $mobileMenuOpen = false;

    public function toggleMobileMenu(): void
    {
        $this->mobileMenuOpen = ! $this->mobileMenuOpen;
    }

    public function closeMobileMenu(): void
    {
        $this->mobileMenuOpen = false;
    }

    public function render(): View
    {
        return view('partials.navbar');
    }
}
