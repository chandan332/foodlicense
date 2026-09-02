<?php

use App\Enums\EnquiryStatus;
use App\Enums\ServiceType;
use App\Livewire\AdminDashboard;
use App\Livewire\AdminLogin;
use App\Models\Admin;
use App\Models\Enquiry;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;

it('seeds the local demo administrator only', function (): void {
    $this->app['env'] = 'local';

    $this->seed(DatabaseSeeder::class);
    $this->seed(DatabaseSeeder::class);

    $admin = Admin::query()->where('email', 'admin@example.com')->firstOrFail();

    expect(Hash::check('password', $admin->password))->toBeTrue();
});

it('does not seed the demo administrator outside the local environment', function (): void {
    $this->app['env'] = 'production';

    $this->seed(DatabaseSeeder::class);

    expect(Admin::query()->count())->toBe(0);
});

it('redirects guests to the admin login page', function (): void {
    $this->get(route('admin.dashboard'))->assertRedirect(route('admin.login'));
});

it('does not allow normal users to access the admin dashboard', function (): void {
    $this->actingAs(User::factory()->create())
        ->get(route('admin.dashboard'))
        ->assertRedirect(route('admin.login'));
});

it('allows administrators to access the dashboard', function (): void {
    $this->actingAs(Admin::factory()->create(), 'admin')
        ->get(route('admin.dashboard'))
        ->assertOk()
        ->assertSeeLivewire(AdminDashboard::class);
});

it('authenticates administrators with their dedicated guard', function (): void {
    Admin::factory()->create(['email' => 'admin@example.com', 'password' => Hash::make('secret-password')]);

    Livewire::test(AdminLogin::class)
        ->set('email', 'admin@example.com')
        ->set('password', 'secret-password')
        ->call('login')
        ->assertHasNoErrors()
        ->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticated('admin');
});

it('rejects invalid administrator credentials', function (): void {
    Admin::factory()->create(['email' => 'admin@example.com', 'password' => Hash::make('secret-password')]);

    Livewire::test(AdminLogin::class)
        ->set('email', 'admin@example.com')
        ->set('password', 'wrong-password')
        ->call('login')
        ->assertHasErrors(['email']);

    $this->assertGuest('admin');
});

it('creates administrator accounts from the dashboard', function (): void {
    $this->actingAs(Admin::factory()->create(), 'admin');

    Livewire::test(AdminDashboard::class)
        ->set('adminEmail', 'new-admin@example.com')
        ->set('adminPassword', 'strong-password')
        ->set('adminPasswordConfirmation', 'strong-password')
        ->call('createAdministrator')
        ->assertHasNoErrors()
        ->assertSee('Administrator account created.')
        ->assertSet('adminEmail', '');

    $admin = Admin::query()->where('email', 'new-admin@example.com')->firstOrFail();

    expect(Hash::check('strong-password', $admin->password))->toBeTrue();
});

it('validates new administrator credentials', function (): void {
    $this->actingAs(Admin::factory()->create(), 'admin');
    Admin::factory()->create(['email' => 'existing@example.com']);

    Livewire::test(AdminDashboard::class)
        ->set('adminEmail', 'existing@example.com')
        ->set('adminPassword', 'short')
        ->set('adminPasswordConfirmation', 'different')
        ->call('createAdministrator')
        ->assertHasErrors(['adminEmail', 'adminPassword']);
});

it('creates an administrator through the bootstrap command', function (): void {
    $this->artisan('admin:create', ['email' => 'first-admin@example.com'])
        ->expectsQuestion('Administrator password', 'command-password')
        ->assertSuccessful();

    $admin = Admin::query()->where('email', 'first-admin@example.com')->firstOrFail();

    expect(Hash::check('command-password', $admin->password))->toBeTrue();
});

it('filters enquiries and updates their status', function (): void {
    $this->actingAs(Admin::factory()->create(), 'admin');

    $enquiry = Enquiry::query()->create([
        'service' => ServiceType::Fssai,
        'full_name' => 'Asha Sharma',
        'mobile_number' => '9876543210',
        'state' => 'Delhi',
    ]);

    Enquiry::query()->create([
        'service' => ServiceType::Gst,
        'full_name' => 'Ravi Kumar',
        'mobile_number' => '9876543211',
        'state' => 'Karnataka',
    ]);

    Livewire::test(AdminDashboard::class)
        ->set('search', 'Asha')
        ->assertSee('Asha Sharma')
        ->assertDontSee('Ravi Kumar')
        ->call('updateStatus', $enquiry->id, EnquiryStatus::Contacted->value);

    expect($enquiry->refresh()->status)->toBe(EnquiryStatus::Contacted);
});

it('logs administrators out', function (): void {
    $this->actingAs(Admin::factory()->create(), 'admin');

    Livewire::test(AdminDashboard::class)
        ->call('logout')
        ->assertRedirect(route('admin.login'));

    $this->assertGuest('admin');
});
