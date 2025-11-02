<!-- Redesigned dashboard with modern card layout, hero section -->
<x-app-layout>
    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Hero Section -->
            <div class="mb-12">
                <h1 class="text-4xl sm:text-5xl font-bold text-gray bg-clip-text bg-gradient-to-r from-primary to-accent mb-3">
                    Welcome to Dashboard
                </h1>
                <p class="text-lg text-muted-foreground max-w-2xl">
                    Manage your reports and violations efficiently with our modern reporting system.
                </p>
            </div>

            <!-- CTA Section -->
            @if(Auth::check() && Auth::user()->role === 'siswa')
            <div class="mb-8">
                <a href="{{ route('siswa.index') }}" 
                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                <span>View Reports</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
            @endif

            <!-- Info Cards Grid -->
            <div class="grid md:grid-cols-3 gap-6">
                <div class="group relative bg-card rounded-2xl p-8 border border-border/50 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Easy Reporting</h3>
                        <p class="text-muted-foreground text-sm">Submit violation reports quickly and easily with our intuitive interface.</p>
                    </div>
                </div>

                <div class="group relative bg-card rounded-2xl p-8 border border-border/50 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Real-time Status</h3>
                        <p class="text-muted-foreground text-sm">Track your reports in real-time and receive instant updates on verification status.</p>
                    </div>
                </div>

                <div class="group relative bg-card rounded-2xl p-8 border border-border/50 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Secure & Private</h3>
                        <p class="text-muted-foreground text-sm">Your data is encrypted and protected with industry-leading security standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
