<!-- Redesigned admin dashboard with modern table styling -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent font-bold text-2xl">
            {{ __('All Reports') }}
        </h2>
    </x-slot>

    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
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
                                <th class="px-6 py-4 text-left text-sm font-semibold text-foreground">Evidence</th>
                                <th class="px-6 py-4 text-right text-sm font-semibold text-foreground">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border/50">
                            @forelse ($admins as $item)
                                <tr class="hover:bg-muted/30 transition-colors duration-200">
                                    <td class="px-6 py-4 text-sm font-medium text-foreground">{{ $item->nama }}</td>
                                    <td class="px-6 py-4 text-sm text-muted-foreground">{{ $item->kategori }}</td>
                                    <td class="px-6 py-4 text-sm text-muted-foreground">{{ $item->lokasi }}</td>
                                    <td class="px-6 py-4 text-sm text-muted-foreground">{{ $item->waktu }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        @if ($item->gambar)
                                            <img 
                                                src="{{ asset('storage/' . $item->gambar) }}" 
                                                alt="Evidence"
                                                class="w-12 h-12 object-cover rounded-lg border border-border/50 hover:scale-110 transition-transform duration-300 cursor-pointer"
                                            />
                                        @else
                                            <span class="text-muted-foreground text-xs italic">No image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a 
                                            href="{{ route('admin.show', $item->id) }}" 
                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary/10 text-primary font-medium hover:bg-primary/20 transition-all duration-200">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 3C5.454 3 1.732 6.11.458 10c1.274 3.89 4.996 7 9.542 7s8.268-3.11 9.542-7C18.268 6.11 14.546 3 10 3zM10 15c-2.761 0-5-2.239-5-5s2.239-5 5-5 5 2.239 5 5-2.239 5-5 5z" />
                                                <path d="M10 8a2 2 0 100 4 2 2 0 000-4z" />
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
                                        <p class="text-muted-foreground font-medium">No reports found</p>
                                        <p class="text-muted-foreground text-sm mt-1">There are no violation reports to review</p>
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
