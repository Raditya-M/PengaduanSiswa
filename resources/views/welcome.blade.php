<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--... <truncated>
            </style>
        @endif
    </head>
    <body class="font-sans bg-background text-foreground dark:text-foreground antialiased">
        <!-- Modern navigation header with gradient and semantic tokens -->
        <header class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center">
                        <span class="font-bold text-primary-foreground text-sm">L</span>
                    </div>
                    <span class="font-semibold text-lg text-foreground hidden sm:inline">{{ config('app.name', 'Laravel') }}</span>
                </div>

                <!-- Navigation links with semantic styling -->
                @if (Route::has('login'))
                    <nav class="flex items-center gap-3">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors duration-200">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="px-4 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors duration-200">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors duration-200">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium bg-gradient-to-r from-primary to-accent text-primary-foreground rounded-lg hover:shadow-md transition-all duration-200">Register</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>

        <!-- Main content with modern hero and card sections -->
        <main class="min-h-screen bg-gradient-to-br from-background via-background to-primary/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <!-- Hero Section -->
                <div class="mb-20 text-center">
                    <h1 class="text-5xl sm:text-6xl font-bold text-balance mb-6">
                        <span class="text-gray bg-clip-text bg-gradient-to-r from-primary via-accent to-primary">Modern Reporting System</span>
                    </h1>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto mb-8">
                        Manage violations and reports efficiently with our sleek, modern dashboard. Submit, track, and resolve issues in real-time.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h8a3 3 0 013 3v1" />
                                </svg>
                                Sign In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl border-2 border-primary text-primary font-semibold hover:bg-primary/5 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                    </svg>
                                    Create Account
                                </a>
                            @endif
                        
                        @endauth
                    </div>
                </div>

                <!-- Feature cards grid with hover effects -->
                <div class="grid md:grid-cols-3 gap-6 mb-20">
                    <div class="group relative bg-card rounded-2xl p-8 border border-border shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-foreground mb-3">Fast & Reliable</h3>
                            <p class="text-muted-foreground">Submit reports instantly with our lightning-fast processing system that never slows you down.</p>
                        </div>
                    </div>

                    <div class="group relative bg-card rounded-2xl p-8 border border-border shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-foreground mb-3">Secure & Private</h3>
                            <p class="text-muted-foreground">Enterprise-grade encryption keeps your data safe and your privacy protected at all times.</p>
                        </div>
                    </div>

                    <div class="group relative bg-card rounded-2xl p-8 border border-border shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-foreground mb-3">Real-time Updates</h3>
                            <p class="text-muted-foreground">Get instant notifications and track your reports live as they progress through verification.</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="relative bg-gradient-to-r from-primary/10 via-accent/5 to-primary/10 rounded-2xl p-12 border border-border/50 text-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-accent/20 opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <h2 class="text-3xl font-bold text-foreground mb-3">Ready to Get Started?</h2>
                        <p class="text-muted-foreground mb-8 max-w-2xl mx-auto">Join thousands of users who trust our platform for efficient violation reporting and tracking.</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            @guest
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                    Get Started Now
                                </a>
                                <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-8 py-3 rounded-xl border-2 border-primary text-primary font-semibold hover:bg-primary/5 transition-all duration-300">
                                    Sign In
                                </a>
                            @else
                                <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-8 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                    Go to Dashboard
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Modern footer with semantic styling -->
        <footer class="border-t border-border/40 bg-card/50 backdrop-blur supports-[backdrop-filter]:bg-card/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">              
                <div class="border-t border-border/40 pt-8">
                    <div class="flex flex-col sm:flex-row justify-between items-center text-sm text-muted-foreground">
                        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
