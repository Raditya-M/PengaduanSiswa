<!-- Redesigned profile page with modern card sections -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent font-bold text-2xl">
            {{ __('Account Settings') }}
        </h2>
    </x-slot>

    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="space-y-8">
                <!-- Profile Information Card -->
                <div class="bg-card rounded-2xl shadow-lg border border-border/50 overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="bg-gradient-to-r from-primary/10 to-accent/10 border-b border-border/50 px-8 py-6">
                        <h3 class="text-xl font-bold text-foreground">{{ __('Profile Information') }}</h3>
                        <p class="text-muted-foreground text-sm mt-1">Update your account details and information</p>
                    </div>
                    <div class="p-8">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Update Password Card -->
                <div class="bg-card rounded-2xl shadow-lg border border-border/50 overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="bg-gradient-to-r from-primary/10 to-accent/10 border-b border-border/50 px-8 py-6">
                        <h3 class="text-xl font-bold text-foreground">{{ __('Change Password') }}</h3>
                        <p class="text-muted-foreground text-sm mt-1">Ensure your account is using a secure password</p>
                    </div>
                    <div class="p-8">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <!-- Delete Account Card -->
                <div class="bg-card rounded-2xl shadow-lg border border-destructive/30 bg-gradient-to-br from-destructive/5 to-destructive/10 overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="bg-gradient-to-r from-destructive/20 to-destructive/10 border-b border-destructive/20 px-8 py-6">
                        <h3 class="text-xl font-bold text-destructive">{{ __('Delete Account') }}</h3>
                        <p class="text-muted-foreground text-sm mt-1">Permanently delete your account and all associated data</p>
                    </div>
                    <div class="p-8">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
