<div>
    <header class="bg-brand-dark px-6 py-4 text-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between">
            <div>
                <p class="text-sm text-gray-400">Legal Expert India</p>
                <h1 class="text-xl font-bold">Enquiry dashboard</h1>
            </div>
            <button wire:click="logout" class="rounded-lg border border-gray-600 px-4 py-2 text-sm font-semibold hover:bg-gray-800">Sign out</button>
        </div>
    </header>

    <main class="mx-auto max-w-7xl space-y-8 px-6 py-8">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (['all' => 'All enquiries', 'new' => 'New', 'contacted' => 'Contacted', 'closed' => 'Closed'] as $key => $label)
                <div class="rounded-xl bg-white p-5 shadow-sm">
                    <p class="text-sm text-gray-500">{{ $label }}</p>
                    <p class="mt-1 text-3xl font-bold">{{ $key === 'all' ? $counts->sum() : ($counts[$key] ?? 0) }}</p>
                </div>
            @endforeach
        </div>

        <section class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_20rem]">
            <div class="rounded-xl bg-white p-5 shadow-sm">
                <h2 class="text-lg font-bold">Enquiries</h2>
                <div class="mt-5 grid gap-3 md:grid-cols-3">
                    <input wire:model.live.debounce.300ms="search" placeholder="Search name, phone or state" class="rounded-lg border border-gray-300 px-4 py-2">
                    <select wire:model.live="service" class="rounded-lg border border-gray-300 px-4 py-2">
                        <option value="">All services</option>
                        @foreach ($services as $availableService)
                            <option value="{{ $availableService->value }}">{{ $availableService->label() }}</option>
                        @endforeach
                    </select>
                    <select wire:model.live="status" class="rounded-lg border border-gray-300 px-4 py-2">
                        <option value="">All statuses</option>
                        @foreach ($statuses as $availableStatus)
                            <option value="{{ $availableStatus->value }}">{{ $availableStatus->label() }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-5 overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="border-b text-gray-500">
                            <tr><th class="p-3">Enquiry</th><th class="p-3">Service</th><th class="p-3">Location</th><th class="p-3">Received</th><th class="p-3">Status</th></tr>
                        </thead>
                        <tbody>
                            @forelse ($enquiries as $enquiry)
                                <tr wire:key="enquiry-{{ $enquiry->id }}" class="border-b">
                                    <td class="p-3"><p class="font-semibold">{{ $enquiry->full_name }}</p><a href="tel:{{ $enquiry->mobile_number }}" class="text-brand-orange">{{ $enquiry->mobile_number }}</a></td>
                                    <td class="p-3">{{ $enquiry->service->label() }}</td>
                                    <td class="p-3">{{ $enquiry->state }}</td>
                                    <td class="p-3">{{ $enquiry->created_at->format('d M Y, h:i A') }}</td>
                                    <td class="p-3"><select wire:change="updateStatus({{ $enquiry->id }}, $event.target.value)" class="rounded-lg border border-gray-300 px-3 py-2">@foreach ($statuses as $availableStatus)<option value="{{ $availableStatus->value }}" @selected($enquiry->status === $availableStatus)>{{ $availableStatus->label() }}</option>@endforeach</select></td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="p-8 text-center text-gray-500">No enquiries found.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">{{ $enquiries->links() }}</div>
            </div>

            <aside class="space-y-6">
                <section class="rounded-xl bg-white p-5 shadow-sm">
                    <h2 class="text-lg font-bold">Add administrator</h2>
                    <p class="mt-1 text-sm text-gray-500">New administrators can sign in to this dashboard.</p>
                    @if ($adminCreatedMessage)
                        <p role="status" class="mt-4 rounded-lg bg-green-50 p-3 text-sm text-green-800">{{ $adminCreatedMessage }}</p>
                    @endif
                    <form wire:submit="createAdministrator" class="mt-5 space-y-4">
                        <div><label for="admin-email" class="text-sm font-semibold">Email</label><input id="admin-email" type="email" wire:model="adminEmail" class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2">@error('adminEmail') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror</div>
                        <div><label for="admin-password" class="text-sm font-semibold">Password</label><input id="admin-password" type="password" wire:model="adminPassword" class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2">@error('adminPassword') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror</div>
                        <div><label for="admin-password-confirmation" class="text-sm font-semibold">Confirm password</label><input id="admin-password-confirmation" type="password" wire:model="adminPasswordConfirmation" class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2"></div>
                        <button type="submit" wire:loading.attr="disabled" wire:target="createAdministrator" class="w-full rounded-lg bg-brand-orange px-4 py-2 font-semibold text-white hover:bg-orange-600 disabled:cursor-not-allowed disabled:opacity-70"><span wire:loading.remove wire:target="createAdministrator">Create administrator</span><span wire:loading wire:target="createAdministrator">Creating...</span></button>
                    </form>
                </section>

                <section class="rounded-xl bg-white p-5 shadow-sm">
                    <h2 class="text-lg font-bold">Administrator accounts</h2>
                    <ul class="mt-4 divide-y divide-gray-100">
                        @foreach ($administrators as $administrator)
                            <li wire:key="administrator-{{ $administrator->id }}" class="py-3 first:pt-0"><p class="break-all text-sm font-medium">{{ $administrator->email }}</p><p class="mt-1 text-xs text-gray-500">Added {{ $administrator->created_at->format('d M Y') }}</p></li>
                        @endforeach
                    </ul>
                </section>
            </aside>
        </section>
    </main>
</div>
