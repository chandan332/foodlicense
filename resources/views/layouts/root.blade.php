<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Legal Success India</title>
    <link rel="shortcut icon" href="{{ Vite::image('logo.jpg') }}" type="image/png" />
    @yield('head')
    <!-- Custom styles -->
    @vite(['resources/scss/app.scss', 'resources/ts/app.ts'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16674432877"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "AW-16674432877");
    </script>
    <script>
        gtag("event", "conversion", {
            send_to: "AW-16674432877/XG3fCKCV2tEZEO3O_o4-",
            value: 1.0,
            currency: "INR",
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10941642875"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10941642875');
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-10941642875/UFQ4CJ_W-NIZEPvwsOEo'
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BP9BF6M5VM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BP9BF6M5VM');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js",
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-T9WWSRQG");
    </script>
</head>

@empty($route)
    @php $route = '/'; @endphp
@endempty

<body>
    <div class="container overflow-hidden">
        <!-- Navbar -->
        <x-nav-bar :route="$route" />
        <!-- Content -->
        @yield('content')
        <!-- Footer -->
        <x-footer />
    </div>
    <div class="tw-fixed tw-bottom-0 tw-right-0 tw-mr-4 tw-mb-4">
        <div class="tw-flex tw-flex-col tw-gap-4 tw-text-4xl">
            <div>
                <a href="tel:+6290634766">
                    <i class="fa-solid fa-phone fa-shake tw-text-blue-500"></i>
                </a>
            </div>
            <div>
                <a
                    href="https://api.whatsapp.com/send/?phone=6290634766&text=Hi+i+just+want+to+know+about+your+services+&type=phone_number&app_absent=0">
                    <i class="fa-brands fa-whatsapp fa-beat tw-text-green-600"></i>
                </a>
            </div>
        </div>
    </div>
    @yield('script')
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9WWSRQG" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript> --}}
</body>

</html>
