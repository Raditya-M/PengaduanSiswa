<!-- Redesigned login form with modern styling -->
<x-guest-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray bg-clip-text bg-gradient-to-r from-primary to-accent mb-2">
                Welcome Back
            </h1>
            <p class="text-muted-foreground">Sign in to your account to continue</p>
        </div>

        <!-- Session Status -->
        @if ($errors->any())
            <div class="p-4 rounded-xl bg-destructive/10 border border-destructive/30 text-destructive text-sm">
                <p class="font-semibold">{{ __('Login Failed') }}</p>
                <p>{{ __('The credentials provided are invalid.') }}</p>
            </div>
        @endif
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email Address')" class="text-foreground font-semibold mb-2" />
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username"
                    class="w-full px-4 py-3 rounded-xl border border-border bg-card text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                    placeholder="you@example.com"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-destructive text-sm" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-foreground font-semibold mb-2" />
                <input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    class="w-full px-4 py-3 rounded-xl border border-border bg-card text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-destructive text-sm" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    name="remember"
                    class="w-4 h-4 rounded border-border bg-card text-primary focus:ring-2 focus:ring-primary/20 cursor-pointer"
                />
                <label for="remember_me" class="ms-2 text-sm text-muted-foreground cursor-pointer">
                    {{ __('Remember me') }}
                </label>
            </div>

            <!-- Footer Links & Button -->
            <div class="flex items-center justify-between pt-2">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-primary hover:text-accent transition-colors duration-200 font-medium">
                        {{ __('Forgot password?') }}
                    </a>
                @endif

                <button type="submit" class="px-6 py-2 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50">
                    {{ __('Sign In') }}
                </button>
            </div>

            <!-- Sign Up Link -->
            <div class="text-center pt-4">
                <p class="text-muted-foreground text-sm">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-primary hover:text-accent font-semibold transition-colors">
                        {{ __('Register here') }}
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>
