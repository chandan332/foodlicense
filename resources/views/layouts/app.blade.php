<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Legal Expert India' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <livewire:navigation />

    <!-- Main Content Area -->
    <main>
        {{ $slot }}
    </main>

    <livewire:footer />

    @livewireScripts
</body>
</html>
