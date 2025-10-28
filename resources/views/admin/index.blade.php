<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">      
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">nama pelanggar</th>
                            <th scope="col" class="px-4 py-3">kategori pelanggaran</th>
                            <th scope="col" class="px-4 py-3">deskripsi pelanggaran</th>
                            <th scope="col" class="px-4 py-3">waktu pelanggaran</th>
                            <th scope="col" class="px-4 py-3 flex items-center justify-end">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach ($admins as $item)
    <tr class="border-b dark:border-gray-700">
        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $item->nama_pelanggar }}
        </th>
        <td class="px-4 py-3">{{ $item->kategori_pelanggaran }}</td>
        <td class="px-4 py-3">{{ $item->deskripsi }}</td>
        <td class="px-4 py-3">{{ $item->waktu }}</td>
        <td class="px-4 py-3 flex items-center justify-end">
            <a href="{{ route('admin.show', $item->id) }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
            </a>
        </td>
    </tr>
    @endforeach
</tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
</x-app-layout>

