<!-- Redesigned register form with modern styling -->
<x-guest-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray bg-clip-text bg-gradient-to-r from-primary to-accent mb-2">
                Create Account
            </h1>
            <p class="text-muted-foreground">Join us to start reporting violations</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Full Name')" class="text-foreground font-semibold mb-2" />
                <input 
                    id="name" 
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    required 
                    autofocus 
                    autocomplete="name"
                    class="w-full px-4 py-3 rounded-xl border border-border bg-card text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                    placeholder="John Doe"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-destructive text-sm" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email Address')" class="text-foreground font-semibold mb-2" />
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
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
                    autocomplete="new-password"
                    class="w-full px-4 py-3 rounded-xl border border-border bg-card text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-destructive text-sm" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-foreground font-semibold mb-2" />
                <input 
                    id="password_confirmation" 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    class="w-full px-4 py-3 rounded-xl border border-border bg-card text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-destructive text-sm" />
            </div>

            <!-- Role Selection -->
            <div>
                <x-input-label for="role" :value="__('Account Type')" class="text-foreground font-semibold mb-2" />
                <select 
                    id="role" 
                    name="role" 
                    required
                    class="w-full px-4 py-3 rounded-xl border border-border bg-card text-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                >
                    <option value="siswa" class="bg-card text-foreground">Siswa</option>
                    <option value="admin" class="bg-card text-foreground">Admin</option>
                </select>
                <x-input-error :messages="$errors->get('role')" class="mt-2 text-destructive text-sm" />
            </div>

            <!-- Submit & Links -->
            <div class="flex items-center justify-between pt-2">
                <a href="{{ route('login') }}" class="text-sm text-primary hover:text-accent transition-colors duration-200 font-medium">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit" class="px-6 py-2 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50">
                    {{ __('Create Account') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
