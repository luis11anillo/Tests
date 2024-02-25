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
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex justify-center items-center">
            <div class="w-1/2 h-screen hidden lg:block object-cover bg-gradient-to-t from-cyan-600 to-blue-500">
                {{-- Image --}}
            </div>
            
            <div class="lg:p-40 md:p-60 sm:20 w-full lg:w-1/2">
    
                <div class="">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
