<?php

namespace App\Livewire;

use App\Enums\ServiceType;
use Illuminate\View\View;
use Livewire\Component;

class ServicePage extends Component
{
    public ServiceType $service;

    public function mount(ServiceType $service): void
    {
        $this->service = $service;
    }

    public function render(): View
    {
        return view($this->service->value)
            ->layout('layouts.app', ['title' => $this->service->label().' | Legal Expert India']);
    }
}
