<?php

use App\Enums\ServiceType;
use App\Livewire\EnquiryForm;
use App\Livewire\HomePage;
use App\Livewire\Navigation;
use App\Livewire\ServicePage;
use App\Models\Enquiry;
use Livewire\Livewire;

it('renders every public page as a Livewire component', function (string $route, string $component): void {
    $this->get($route)
        ->assertOk()
        ->assertSeeLivewire($component);
})->with([
    ['/', HomePage::class],
    ['/fssai-registration', ServicePage::class],
    ['/gst-registration', ServicePage::class],
    ['/trademark-registration', ServicePage::class],
]);

it('accepts the resolved service enum when mounting a service page', function (): void {
    Livewire::test(ServicePage::class, ['service' => ServiceType::Fssai])
        ->assertSet('service', ServiceType::Fssai)
        ->assertSee('FSSAI Registration & License');
});

it('stores a valid enquiry and shows a success message', function (ServiceType $service): void {
    Livewire::test(EnquiryForm::class, ['service' => $service])
        ->set('fullName', 'Asha Sharma')
        ->set('mobileNumber', '9876543210')
        ->set('state', 'Delhi')
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('submitted', true)
        ->assertSet('fullName', '')
        ->assertSet('mobileNumber', '')
        ->assertSet('state', '')
        ->assertSee('Thank you. We have received your enquiry');

    $enquiry = Enquiry::query()->sole();

    expect($enquiry->service)->toBe($service);
    expect($enquiry->full_name)->toBe('Asha Sharma');
    expect($enquiry->mobile_number)->toBe('9876543210');
    expect($enquiry->state)->toBe('Delhi');
})->with([
    [ServiceType::Fssai],
    [ServiceType::Gst],
    [ServiceType::Trademark],
]);

it('validates enquiry fields', function (): void {
    Livewire::test(EnquiryForm::class, ['service' => ServiceType::Fssai])
        ->set('fullName', str_repeat('A', 256))
        ->set('mobileNumber', '12345')
        ->set('state', 'Invalid State')
        ->call('save')
        ->assertHasErrors([
            'fullName' => 'max',
            'mobileNumber' => 'regex',
            'state' => 'in',
        ]);

    expect(Enquiry::query()->count())->toBe(0);
});

it('provides accessible, reactive mobile navigation with valid service links', function (): void {
    Livewire::test(Navigation::class)
        ->assertSee(route('gst-registration'), false)
        ->assertSee(route('trademark-registration'), false)
        ->assertSee('aria-expanded="false"', false)
        ->call('toggleMobileMenu')
        ->assertSet('mobileMenuOpen', true)
        ->assertSee('aria-expanded="true"', false)
        ->call('closeMobileMenu')
        ->assertSet('mobileMenuOpen', false);
});
