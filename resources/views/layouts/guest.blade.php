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
    <body class="font-sans text-foreground antialiased">
        <!-- Modern guest layout with gradient background and centered card -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-background via-background to-primary/5">
            <div class="transform transition-all duration-300 hover:scale-105">
                <a href="/" class="flex items-center justify-center">
                    <x-application-logo class="w-16 h-16 fill-current text-primary" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-8 px-6 py-8 bg-card dark:bg-card rounded-2xl shadow-xl border border-border/50 transition-all duration-300 hover:shadow-2xl hover:border-primary/30">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
