<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-gradient-to-r from-primary via-primary/95 to-accent/90 border-b border-primary/20 shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo & Navigation -->
            <div class="flex items-center space-x-8">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="group">
                        <x-application-logo class="block h-8 w-auto fill-current text-primary-foreground transition-transform duration-300 group-hover:scale-110" />
                    </a>
                </div>

                <!-- Navigation Links -->
            <div class="hidden space-x-1 sm:flex">
                @if(Auth::user()->role === 'siswa')
                    <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-primary-foreground transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-primary-foreground/20' : 'hover:bg-primary-foreground/10' }}">
                        {{ __('Dashboard') }}
                    </a>
                @endif
            </div>

            <div class="hidden space-x-1 sm:flex">
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-primary-foreground transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-primary-foreground/20' : 'hover:bg-primary-foreground/10' }}">
                        {{ __('Dashboard') }}
                    </a>
                @endif
            </div>

            <div class="hidden space-x-1 sm:flex">
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('admin.index') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-gray transition-all duration-200 {{ request()->routeIs('admin.index') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                        Laporan
                    </a>
                @endif
            </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium text-primary-foreground transition-all duration-200 hover:bg-primary-foreground/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary focus:ring-primary-foreground">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="ms-2 h-4 w-4 transition-transform duration-200" :class="open && 'rotate-180'" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div @click.away="open = false" x-show="open" class="absolute right-0 mt-2 w-48 bg-card rounded-xl shadow-2xl border border-border/50 py-1 z-50 transition-all duration-200">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-foreground hover:bg-muted rounded-lg transition-colors">{{ __('Profile') }}</a>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-foreground hover:bg-muted rounded-lg transition-colors">{{ __('Log Out') }}</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Hamburger Menu -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-lg text-primary-foreground hover:bg-primary-foreground/20 transition-colors duration-200">
                    <svg class="h-6 w-6" :class="{'hidden': open, 'inline-flex': !open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{'hidden': !open, 'inline-flex': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden border-t border-primary-foreground/20">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-primary-foreground hover:bg-primary-foreground/20 transition-colors">{{ __('Dashboard') }}</a>
        </div>

        <div class="border-t border-primary-foreground/20 px-2 py-3 space-y-1">
            <div class="px-3 py-2">
                <div class="text-base font-medium text-primary-foreground">{{ Auth::user()->name }}</div>
                <div class="text-sm text-primary-foreground/80">{{ Auth::user()->email }}</div>
            </div>

            <a href="{{ route('profile.edit') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-primary-foreground hover:bg-primary-foreground/20 transition-colors">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 rounded-lg text-base font-medium text-primary-foreground hover:bg-primary-foreground/20 transition-colors">{{ __('Log Out') }}</button>
            </form>
        </div>
    </div>
</nav>
