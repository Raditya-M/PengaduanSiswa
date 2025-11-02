<!-- Redesigned report detail view with modern card styling -->
<x-app-layout>
    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Back Button & Header -->
            <div class="mb-8">
                <a href="{{ route('siswa.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-accent font-medium transition-colors mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Reports
                </a>
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">
                    Report Details
                </h2>
            </div>

            <!-- Main Card -->
            <div class="bg-card rounded-2xl shadow-lg border border-border/50 overflow-hidden">
                <!-- Header Section -->
                <div class="bg-gradient-to-r from-primary/10 to-accent/10 border-b border-border/50 p-6">
                    <h3 class="text-2xl font-bold text-foreground mb-2">{{ $laporan->nama }}</h3>
                    <p class="text-muted-foreground">Report ID: #{{ str_pad($laporan->id, 6, '0', STR_PAD_LEFT) }}</p>
                </div>

                <!-- Details Grid -->
                <div class="p-8 space-y-6">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="text-sm font-semibold text-muted-foreground uppercase tracking-wide block mb-2">Suspect Name</label>
                            <p class="text-lg text-foreground">{{ $laporan->nama }}</p>
                        </div>
                        <div>
                            <label class="text-sm font-semibold text-muted-foreground uppercase tracking-wide block mb-2">Date & Time</label>
                            <p class="text-lg text-foreground">{{ \Carbon\Carbon::parse($laporan->tanggal)->format('d M Y, H:i') }}</p>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="text-sm font-semibold text-muted-foreground uppercase tracking-wide block mb-2">Location</label>
                            <p class="text-lg text-foreground">{{ $laporan->lokasi }}</p>
                        </div>
                        <div>
                            <label class="text-sm font-semibold text-muted-foreground uppercase tracking-wide block mb-2">Violation Category</label>
                            <p class="text-lg text-foreground">{{ $laporan->kategori }}</p>
                        </div>
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-muted-foreground uppercase tracking-wide block mb-2">Status</label>
                        <div class="inline-flex items-center px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200
                            @if($laporan->status == 'Pending') bg-yellow-500/20 text-yellow-700 dark:text-yellow-400 border border-yellow-500/30
                            @elseif($laporan->status == 'Diterima') bg-green-500/20 text-green-700 dark:text-green-400 border border-green-500/30
                            @else bg-red-500/20 text-red-700 dark:text-red-400 border border-red-500/30 @endif">
                            {{ ucfirst($laporan->status) }}
                        </div>
                    </div>

                    @if ($laporan->gambar)
                        <div>
                            <label class="text-sm font-semibold text-muted-foreground uppercase tracking-wide block mb-3">Evidence Photo</label>
                            <div class="rounded-xl overflow-hidden border border-border/50 shadow-lg">
                                <img 
                                    src="{{ asset('storage/' . $laporan->gambar) }}" 
                                    alt="Evidence" 
                                    class="w-full h-auto object-cover hover:scale-105 transition-transform duration-300"
                                />
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Footer -->
                <div class="bg-muted/50 border-t border-border/50 px-8 py-6 flex flex-col sm:flex-row gap-4">
                    <a 
                        href="{{ route('siswa.index') }}" 
                        class="flex-1 px-6 py-3 rounded-xl border border-border bg-card text-foreground font-semibold hover:bg-muted transition-all duration-200 text-center">
                        Back
                    </a>

                    <!-- Delete Button -->
                    <form action="{{ route('siswa.destroy', $laporan->id) }}" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit" 
                            onclick="return confirm('Are you sure you want to delete this report?')" 
                            class="w-full px-6 py-3 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition-all duration-200 shadow-md hover:shadow-lg">
                            Delete Report
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
