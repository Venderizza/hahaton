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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FAF3EC] min-h-screen flex flex-col items-center justify-center p-4 antialiased">
{{--    class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#FAF3EC]"--}}
        <div class="w-full max-w-md bg-white rounded-3xl px-8 py-20 bg-[#FAF3EC] px-8 py-20">

            <div id="logo" class="flex gap-x-3 items-center justify-center mb-10">
                <svg class="size-10" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 0C7.16345 0 0 7.16345 0 16H16V0Z" fill="#D8443A"/>
                    <path d="M16 32C24.8366 32 32 24.8366 32 16L16 16L16 32Z" fill="#DF6D44"/>
                    <path d="M16 0C24.8366 0 32 7.16345 32 16H16V0Z" fill="#E9DDCD"/>
                    <path d="M16 32C7.16345 32 -5.81462e-07 24.8366 -1.29873e-06 16L16 16L16 32Z" fill="#383435"/>
                </svg>

                <span class="font-semibold text-4xl text-[#383435]" id="logo-text">escape</span>
            </div>

            {{ $slot }}
        </div>
    </body>
</html>
