<?php

namespace App\Livewire;

use App\Enums\EnquiryStatus;
use App\Enums\ServiceType;
use App\Models\Admin;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboard extends Component
{
    use WithPagination;

    public string $search = '';

    public string $service = '';

    public string $status = '';

    public string $adminEmail = '';

    public string $adminPassword = '';

    public string $adminPasswordConfirmation = '';

    public ?string $adminCreatedMessage = null;

    public function boot(): void
    {
        abort_unless(Auth::guard('admin')->check(), 403);
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedService(): void
    {
        $this->resetPage();
    }

    public function updatedStatus(): void
    {
        $this->resetPage();
    }

    public function updateStatus(int $enquiryId, string $status): void
    {
        validator(['status' => $status], [
            'status' => ['required', Rule::enum(EnquiryStatus::class)],
        ])->validate();

        Enquiry::query()->findOrFail($enquiryId)->update(['status' => $status]);
    }

    public function createAdministrator(): void
    {
        $this->adminCreatedMessage = null;
        $this->adminEmail = strtolower(trim($this->adminEmail));

        $validated = $this->validate([
            'adminEmail' => ['required', 'email', 'max:255', Rule::unique('admins', 'email')],
            'adminPassword' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'adminPassword.confirmed' => 'The password confirmation does not match.',
        ]);

        Admin::query()->create([
            'email' => $validated['adminEmail'],
            'password' => $validated['adminPassword'],
        ]);

        $this->reset('adminEmail', 'adminPassword', 'adminPasswordConfirmation');
        $this->adminCreatedMessage = 'Administrator account created.';
    }

    public function logout(): void
    {
        Auth::guard('admin')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        $this->redirectRoute('admin.login', navigate: true);
    }

    public function render(): View
    {
        $enquiries = Enquiry::query()
            ->when($this->search, fn ($query) => $query->where(fn ($query) => $query
                ->where('full_name', 'like', "%{$this->search}%")
                ->orWhere('mobile_number', 'like', "%{$this->search}%")
                ->orWhere('state', 'like', "%{$this->search}%")))
            ->when($this->service, fn ($query) => $query->where('service', $this->service))
            ->when($this->status, fn ($query) => $query->where('status', $this->status))
            ->latest()->paginate(15);

        return view('livewire.admin-dashboard', [
            'enquiries' => $enquiries,
            'services' => ServiceType::cases(),
            'statuses' => EnquiryStatus::cases(),
            'counts' => Enquiry::query()->selectRaw('status, count(*) as total')->groupBy('status')->pluck('total', 'status'),
            'administrators' => Admin::query()->latest()->get(['id', 'email', 'created_at']),
        ])->layout('layouts.admin', ['title' => 'Admin Dashboard | Legal Expert India']);
    }
}
