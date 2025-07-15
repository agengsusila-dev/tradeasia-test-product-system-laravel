<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <a href="{{ route('admin.products.index') }}"
                        class="bg-red-600 p-2 rounded text-sm text-white hover:bg-red-700">
                        ← Kembali
                    </a>
                </div>

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf

                    @include('admin.products.partials._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
