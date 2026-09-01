<div id="enquiry" class="bg-white rounded-2xl shadow-2xl p-8 text-gray-800">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-900">Apply Now</h2>

    @if ($submitted)
        <div role="status" class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800">
            Thank you. We have received your enquiry and will contact you shortly.
        </div>
    @endif

    <form wire:submit="save" class="space-y-4">
        <div>
            <label for="full-name" class="block text-sm font-semibold text-gray-700 mb-1">Full Name</label>
            <input id="full-name" type="text" wire:model.blur="fullName" autocomplete="name" placeholder="Enter Your Full Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-brand-orange focus:ring-2 focus:ring-orange-200 outline-none transition @error('fullName') border-red-500 @enderror">
            @error('fullName') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="mobile-number" class="block text-sm font-semibold text-gray-700 mb-1">Mobile Number</label>
            <input id="mobile-number" type="tel" wire:model.blur="mobileNumber" autocomplete="tel" inputmode="numeric" placeholder="Enter 10-digit Mobile Number" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-brand-orange focus:ring-2 focus:ring-orange-200 outline-none transition @error('mobileNumber') border-red-500 @enderror">
            @error('mobileNumber') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="state" class="block text-sm font-semibold text-gray-700 mb-1">State / Union Territory</label>
            <select id="state" wire:model.blur="state" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-brand-orange focus:ring-2 focus:ring-orange-200 outline-none transition bg-white @error('state') border-red-500 @enderror">
                <option value="">Select State / Union Territory</option>
                @foreach ($states as $availableState)
                    <option value="{{ $availableState }}">{{ $availableState }}</option>
                @endforeach
            </select>
            @error('state') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit" wire:loading.attr="disabled" wire:target="save" class="w-full bg-brand-orange text-white font-bold py-3.5 rounded-lg hover:bg-orange-600 transition shadow-lg shadow-orange-500/30 mt-4 disabled:cursor-not-allowed disabled:opacity-60">
            <span wire:loading.remove wire:target="save">Apply Now</span>
            <span wire:loading wire:target="save">Submitting...</span>
        </button>
    </form>

    <p class="text-xs text-gray-500 mt-6 text-center leading-relaxed">
        By submitting this form, you agree to be contacted regarding your enquiry. Please review our Privacy Policy for information about how your details are handled.
    </p>
</div>
