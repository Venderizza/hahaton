<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex bg-[#FAF3EC]">
            <livewire:layout.navigation />
            <!-- Page Content -->
            <main class="p-4 md:p-10 w-full">
                <!-- Page Heading -->
                @if (isset($header))
                    <div class="max-w-7xl mt-5 ">
                        {{ $header }}
                    </div>
                @endif
                {{ $slot }}
            </main>

        </div>


    </body>
</html>
