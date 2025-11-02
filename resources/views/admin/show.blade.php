<x-app-layout>
    <!-- Using semantic design tokens instead of hardcoded colors for consistency -->
    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        
        <!-- Header Section -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <a href="{{ route('admin.index') }}" class="inline-flex items-center text-primary hover:text-accent transition-colors mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Reports
                </a>
                <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent mb-2">Report Details</h1>
                <p class="text-muted-foreground">Verify and manage violation reports</p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Detail Section (2/3 width) -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Details Card -->
                    <div class="bg-card rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-border/50 p-8">
                        <h2 class="text-xl font-semibold text-foreground mb-6 flex items-center">
                            <div class="w-1 h-6 bg-gradient-to-b from-primary to-accent rounded-full mr-3"></div>
                            Report Information
                        </h2>

                        <div class="space-y-5">
                            <!-- Nama Pelanggar -->
                            <div class="border-b border-border/50 pb-4">
                                <p class="text-sm font-semibold text-muted-foreground uppercase tracking-wider mb-2">Suspect Name</p>
                                <p class="text-lg text-foreground font-medium">{{ $report->nama }}</p>
                            </div>

                            <!-- Kategori -->
                            <div class="border-b border-border/50 pb-4">
                                <p class="text-sm font-semibold text-muted-foreground uppercase tracking-wider mb-2">Category</p>
                                <p class="text-lg text-foreground font-medium">{{ $report->kategori }}</p>
                            </div>

                            <!-- Lokasi -->
                            <div class="border-b border-border/50 pb-4">
                                <p class="text-sm font-semibold text-muted-foreground uppercase tracking-wider mb-2">Location</p>
                                <p class="text-lg text-foreground font-medium">{{ $report->lokasi }}</p>
                            </div>

                            <!-- Waktu -->
                            <div class="border-b border-border/50 pb-4">
                                <p class="text-sm font-semibold text-muted-foreground uppercase tracking-wider mb-2">Date & Time</p>
                                <p class="text-lg text-foreground font-medium">{{ $report->waktu }}</p>
                            </div>

                            <!-- Status Badge -->
                            <div>
                                <p class="text-sm font-semibold text-muted-foreground uppercase tracking-wider mb-2">Status</p>
                                <span class="inline-flex items-center px-4 py-2 rounded-xl font-medium text-sm transition-all
                                    @if($report->status == 'Diterima') 
                                        bg-green-500/20 text-green-700 dark:text-green-400 border border-green-500/30
                                    @elseif($report->status == 'Ditolak') 
                                        bg-red-500/20 text-red-700 dark:text-red-400 border border-red-500/30
                                    @else 
                                        bg-yellow-500/20 text-yellow-700 dark:text-yellow-400 border border-yellow-500/30
                                    @endif">
                                    {{ $report->status }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Image Section -->
                    @if ($report->gambar)
                        <div class="bg-card rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-border/50 p-8">
                            <h3 class="text-lg font-semibold text-foreground mb-4 flex items-center">
                                <div class="w-1 h-6 bg-gradient-to-b from-primary to-accent rounded-full mr-3"></div>
                                Evidence Photo
                            </h3>
                            <div class="overflow-hidden rounded-xl border border-border/50 shadow-md hover:shadow-lg transition-shadow">
                                <img src="{{ asset('storage/' . $report->gambar) }}" 
                                     alt="Evidence" 
                                     class="w-full h-auto max-h-96 object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                        </div>
                    @endif

                </div>

                <!-- Action Section (1/3 width) -->
                <div class="lg:col-span-1">
                    <!-- Actions Card -->
                    <div class="bg-card rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-border/50 p-6 sticky top-24">
                        <h3 class="text-lg font-semibold text-foreground mb-4">Verify Report</h3>
                        
                        <form action="{{ route('admin.verifikasi', $report->id) }}" method="POST" class="space-y-3">
                            @csrf
                            
                            <!-- Terima Button -->
                            <button name="status" value="Diterima" 
                                class="w-full px-4 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 hover:shadow-lg transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                                ✓ Accept Report
                            </button>

                            <!-- Tolak Button -->
                            <button name="status" value="Ditolak" 
                                class="w-full px-4 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 hover:shadow-lg transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                                ✗ Reject Report
                            </button>
                        </form>

                        <!-- Info Box -->
                        <div class="mt-6 p-4 bg-primary/10 border border-primary/30 rounded-lg">
                            <p class="text-sm text-primary flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Note:</strong> Report verification will be processed immediately and notifications will be sent to the reporter.</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
