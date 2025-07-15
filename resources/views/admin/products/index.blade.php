<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <a href="{{ route('admin.products.create') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded mb-4">
                    + Tambah Produk
                </a>

                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)">
                        <p class="text-white bg-green-500 px-4 py-2 rounded mb-4">
                            {{ session('success') }}
                        </p>
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 text-sm">
                        <thead class="bg-gray-100 text-left">
                            <tr>
                                <th class="px-4 py-2 border-b">No</th>
                                <th class="px-4 py-2 border-b">Nama (EN)</th>
                                <th class="px-4 py-2 border-b">HS Code</th>
                                <th class="px-4 py-2 border-b">CAS Number</th>
                                <th class="px-4 py-2 border-b">Image</th>
                                <th class="px-4 py-2 border-b">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $i => $product)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $products->firstItem() + $i }}</td>
                                    <td class="px-4 py-2">{{ $product->name['en'] ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $product->hs_code }}</td>
                                    <td class="px-4 py-2">{{ $product->cas_number }}</td>
                                    <td class="px-4 py-2">
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="image"
                                                class="w-16 h-auto rounded">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 space-x-2">
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 rounded text-xs">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}"
                                            method="POST" class="inline-block"
                                            onsubmit="return confirm('Yakin hapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-4 text-center text-gray-500">Belum ada produk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
