<!-- Redesigned report creation form with modern styling -->
<x-app-layout>
    <div class="bg-gradient-to-br from-primary/5 via-transparent to-accent/5 min-h-[calc(100vh-theme(height.16))]">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Header -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray bg-clip-text bg-gradient-to-r from-primary to-accent">
                    Submit New Report
                </h2>
                <p class="text-muted-foreground mt-2">Provide details about the violation you witnessed</p>
            </div>

            <!-- Form Card -->
            <div class="bg-card rounded-2xl shadow-lg border border-border/50 p-8">
                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Suspect Name -->
                    <div>
                        <label class="block text-sm font-semibold text-foreground mb-2">Suspect Name</label>
                        <input 
                            type="text" 
                            name="nama" 
                            required
                            class="w-full px-4 py-3 rounded-xl border border-border bg-muted/50 text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                            placeholder="Enter full name of the suspect"
                        />
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-sm font-semibold text-foreground mb-2">Violation Category</label>
                        <input 
                            type="text" 
                            name="kategori" 
                            required
                            class="w-full px-4 py-3 rounded-xl border border-border bg-muted/50 text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                            placeholder="e.g., Uniform Violation, Late Arrival"
                        />
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="block text-sm font-semibold text-foreground mb-2">Location</label>
                        <input 
                            type="text" 
                            name="lokasi" 
                            required
                            class="w-full px-4 py-3 rounded-xl border border-border bg-muted/50 text-foreground placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                            placeholder="Where did this occur?"
                        />
                    </div>

                    <!-- Date & Time -->
                    <div>
                        <label class="block text-sm font-semibold text-foreground mb-2">Date & Time</label>
                        <input 
                            type="datetime-local" 
                            name="waktu" 
                            required
                            class="w-full px-4 py-3 rounded-xl border border-border bg-muted/50 text-foreground transition-all duration-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                        />
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-semibold text-foreground mb-2">Evidence Image (Optional)</label>
                        <div class="relative rounded-xl border-2 border-dashed border-border/50 hover:border-primary/50 transition-colors duration-200 p-8 text-center bg-muted/20">
                            <input 
                                type="file" 
                                name="gambar" 
                                accept="image/*"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                            />
                            <svg class="w-10 h-10 text-muted-foreground/50 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <p class="text-sm font-medium text-foreground">Drag and drop or click to upload</p>
                            <p class="text-xs text-muted-foreground mt-1">PNG, JPG up to 10MB</p>
                        </div>
                    </div>

                    <!-- Submit & Cancel -->
                    <div class="flex gap-4 pt-6">
                        <a href="{{ route('siswa.index') }}" class="flex-1 px-6 py-3 rounded-xl border border-border bg-muted text-foreground font-semibold hover:bg-muted/80 transition-all duration-200 text-center">
                            Cancel
                        </a>
                        <button 
                            type="submit" 
                            class="flex-1 px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-accent text-primary-foreground font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50">
                            Submit Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
