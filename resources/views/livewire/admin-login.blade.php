<div class="flex min-h-screen items-center justify-center bg-brand-dark px-6 py-10">
    <form wire:submit="login" class="w-full max-w-md rounded-3xl bg-white p-8 shadow-2xl md:p-10">
        <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-orange">Legal Expert India</p>
        <h1 class="mt-3 text-3xl font-bold text-gray-900">Admin sign in</h1>
        <div class="mt-8 space-y-5">
            <div><label for="email" class="text-sm font-semibold">Email</label><input id="email" type="email" wire:model="email" class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-3">@error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror</div>
            <div><label for="password" class="text-sm font-semibold">Password</label><input id="password" type="password" wire:model="password" class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-3">@error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror</div>
            <button type="submit" wire:loading.attr="disabled" wire:target="login" class="w-full rounded-lg bg-brand-orange py-3 font-bold text-white hover:bg-orange-600 disabled:cursor-not-allowed disabled:opacity-70"><span wire:loading.remove wire:target="login">Sign in</span><span wire:loading wire:target="login">Signing in...</span></button>
        </div>
    </form>
</div>
