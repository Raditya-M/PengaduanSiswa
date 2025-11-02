<!-- Redesigned siswa dashboard with modern cards, tables, and buttons -->
<x-app-layout>
    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Header Section -->
            <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-gray bg-clip-text bg-gradient-to-r from-primary to-accent">
                        My Reports
                    </h2>
                    <p class="text-muted-foreground mt-1">Track and manage all your violation reports</p>
                </div>
                
                <a href="{{ route('siswa.create') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>New Report</span>
                </a>
            </div>

            <!-- Reports Table -->
            <div class="bg-card rounded-2xl shadow-lg border border-border/50 overflow-hidden transition-all duration-300 hover:shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-border/50 bg-muted/50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-foreground">Suspect Name</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-foreground">Category</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-foreground">Location</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-foreground">Date & Time</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-foreground">Status</th>
                                <th class="px-6 py-4 text-right text-sm font-semibold text-foreground">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border/50">
                            @forelse ($reports as $item)
                                <tr class="hover:bg-muted/30 transition-colors duration-200">
                                    <td class="px-6 py-4 text-sm font-medium text-foreground">{{ $item->nama }}</td>
                                    <td class="px-6 py-4 text-sm text-muted-foreground">{{ $item->kategori }}</td>
                                    <td class="px-6 py-4 text-sm text-muted-foreground">{{ $item->lokasi }}</td>
                                    <td class="px-6 py-4 text-sm text-muted-foreground">{{ $item->waktu }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold transition-all duration-200
                                            @if ($item->status == 'Menunggu Verifikasi')
                                                bg-yellow-500/20 text-yellow-700 dark:text-yellow-400 border border-yellow-500/30
                                            @elseif ($item->status == 'Diterima')
                                                bg-green-500/20 text-green-700 dark:text-green-400 border border-green-500/30
                                            @elseif ($item->status == 'Ditolak')
                                                bg-red-500/20 text-red-700 dark:text-red-400 border border-red-500/30
                                            @endif">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('siswa.show', $item->id) }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary/10 text-primary font-medium hover:bg-primary/20 transition-all duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center">
                                        <svg class="w-12 h-12 text-muted-foreground/50 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                        </svg>
                                        <p class="text-muted-foreground font-medium">No reports yet</p>
                                        <p class="text-muted-foreground text-sm mt-1">Create your first report to get started</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
