<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HomePage extends Component
{
    public function render(): View
    {
        return view('welcome')
            ->layout('layouts.app', ['title' => 'Legal Expert India']);
    }
}
