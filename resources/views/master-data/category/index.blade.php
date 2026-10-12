<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800">Kelola Kategori</h2>
            <a href="{{ route('categories.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition">
                + Tambah Kategori
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">

            @if(session('success'))
                <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <x-card>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b bg-gray-50 text-gray-700 text-sm">
                                <th class="p-3 w-16 text-center">No</th>
                                <th class="p-3">Nama Kategori</th>
                                <th class="p-3">Deskripsi</th>
                                <th class="p-3 w-44 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm">
                            @forelse($categories as $category)
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 text-center text-gray-500">
                                        {{ $loop->iteration + ($categories->currentPage() - 1) * $categories->perPage() }}
                                    </td>
                                    <td class="p-3 font-medium text-gray-900">
                                        {{ $category->name }}
                                    </td>
                                    <td class="p-3 text-gray-600">
                                        {{ $category->description ?: '-' }}
                                    </td>
                                    <td class="p-3 text-center">
                                        <div class="flex justify-center items-center space-x-2">
                                            <a href="{{ route('categories.edit', $category->id) }}"
                                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs font-semibold transition">
                                                Edit
                                            </a>

                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                  method="POST"
                                                  class="inline"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs font-semibold transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="p-6 text-center text-gray-500">
                                        Belum ada data kategori.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($categories->hasPages())
                    <div class="mt-4">
                        {{ $categories->links() }}
                    </div>
                @endif
            </x-card>
        </div>
    </div>
</x-app-layout>