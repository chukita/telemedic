<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Estilos de telemedicina -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        

        <!-- Estilos de AdminLTE -->
        <link href="{{ asset('vendor/adminlte/dist/css/adminlte.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/solid.css') }}" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
 <!-- Scripts de AdminLTE -->
 <script src="{{ asset('vendor/adminlte/dist/js/adminlte.js') }}"></script>
    </body>
</html>
