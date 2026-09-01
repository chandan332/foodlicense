<?php

namespace App\Livewire;

use App\Enums\ServiceType;
use App\Models\Enquiry;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Component;

class EnquiryForm extends Component
{
    private const STATES = [
        'Andaman and Nicobar Islands', 'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar',
        'Chandigarh', 'Chhattisgarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Goa',
        'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka',
        'Kerala', 'Ladakh', 'Lakshadweep', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya',
        'Mizoram', 'Nagaland', 'Odisha', 'Puducherry', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
        'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal',
    ];

    public ServiceType $service;

    public string $fullName = '';

    public string $mobileNumber = '';

    public string $state = '';

    public bool $submitted = false;

    public function mount(ServiceType $service): void
    {
        $this->service = $service;
    }

    public function save(): void
    {
        $validated = $this->validate();

        Enquiry::query()->create([
            'service' => $this->service,
            'full_name' => $validated['fullName'],
            'mobile_number' => $validated['mobileNumber'],
            'state' => $validated['state'],
        ]);

        $this->reset('fullName', 'mobileNumber', 'state');
        $this->submitted = true;
    }

    public function render(): View
    {
        return view('livewire.enquiry-form', ['states' => self::STATES]);
    }

    protected function rules(): array
    {
        return [
            'fullName' => ['required', 'string', 'max:255'],
            'mobileNumber' => ['required', 'regex:/^[6-9][0-9]{9}$/'],
            'state' => ['required', 'string', Rule::in(self::STATES)],
        ];
    }
}
