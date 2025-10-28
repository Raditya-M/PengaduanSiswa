<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                    {{-- tombol tambah kalau nanti mau ditambah --}}
                    {{-- <a href="{{ route('admin.create') }}" 
                       class="flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800">
                        + Tambah Pelanggaran
                    </a> --}}
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Nama Pelanggar</th>
                                <th scope="col" class="px-4 py-3">Kategori Pelanggaran</th>
                                <th scope="col" class="px-4 py-3">Lokasi Pelanggaran</th>
                                <th scope="col" class="px-4 py-3">Waktu Pelanggaran</th>
                                <th scope="col" class="px-4 py-3">Gambar</th>
                                <th scope="col" class="px-4 py-3 text-right">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $item)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nama }}
                                    </td>
                                    <td class="px-4 py-3">{{ $item->kategori }}</td>
                                    <td class="px-4 py-3">{{ $item->lokasi }}</td>
                                    <td class="px-4 py-3">{{ $item->waktu }}</td>
                                    <td class="px-4 py-3">
                                        @if ($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="gambar pelanggaran"
                                                class="w-16 h-16 object-cover rounded-md">
                                        @else
                                            <span class="text-gray-400 italic">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-right">
                                        <a href="{{ route('admin.show', $item->id) }}"
                                            class="inline-flex items-center text-blue-600 hover:underline dark:text-blue-400">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 3C5.454 3 1.732 6.11.458 10c1.274 3.89 4.996 7 9.542 7s8.268-3.11 9.542-7C18.268 6.11 14.546 3 10 3zM10 15c-2.761 0-5-2.239-5-5s2.239-5 5-5 5 2.239 5 5-2.239 5-5 5z" />
                                                <path d="M10 8a2 2 0 100 4 2 2 0 000-4z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-3 text-center text-gray-500">
                                        Belum ada data pelanggaran.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
