<div class="min-h-[80vh] bg-gray-50 px-6 py-32">
    <section class="mx-auto my-20 max-w-xl rounded-2xl bg-white p-8 text-center shadow-xl md:p-12">
        <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-green-100 text-green-700" aria-hidden="true">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 13 4 4L19 7" />
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-gray-900">Thank you for your enquiry</h1>
        <p class="mt-4 text-lg leading-relaxed text-gray-600">
            We have received your details. Our team will contact you shortly.
        </p>
        <p id="redirect-notice" role="status" class="mt-6 text-sm text-gray-500" data-redirect-delay="5000" data-home-url="{{ route('home') }}">
            You will be redirected to the home page in 5 seconds.
        </p>

        <a href="{{ route('home') }}" class="mt-8 inline-block rounded-full bg-brand-orange px-8 py-3 font-bold text-white transition hover:bg-orange-600">
            Return to Home
        </a>
    </section>

    <script>
        const redirectNotice = document.getElementById('redirect-notice');
        const homeUrl = redirectNotice.dataset.homeUrl;
        let secondsRemaining = 5;

        const countdown = window.setInterval(function () {
            secondsRemaining -= 1;
            redirectNotice.textContent = `You will be redirected to the home page in ${secondsRemaining} second${secondsRemaining === 1 ? '' : 's'}.`;

            if (secondsRemaining === 0) {
                window.clearInterval(countdown);
                window.location.assign(homeUrl);
            }
        }, 1000);
    </script>
</div>
