<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ThankYouPage extends Component
{
    public function render(): View
    {
        return view('livewire.thank-you-page')
            ->layout('layouts.app', ['title' => 'Thank You | Legal Expert India']);
    }
}
