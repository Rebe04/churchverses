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
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-60 h-60 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <div class="flex justify-center py-4 sm:items-center sm:justify-end bg-gray-100 px-4 sm:px-6 lg:px-8 fixed bottom-0 w-full">

                <div class="ml-4 text-center text-sm text-verses-blue sm:text-right sm:ml-0 bg-gray-100">
                    Desarrollado con &#128150 por <a class="text-verses-blue-c hover:text-verses-blue-c-h" target="_blank" href="https://estebanbenitez.com">Esteban Benitez</a>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
