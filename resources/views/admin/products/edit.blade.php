<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <a href="{{ route('admin.products.index') }}"
                        class="bg-red-600 p-2 rounded text-sm text-white hover:bg-red-700">
                        ← Back
                    </a>
                </div>


                <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.products.partials._form', ['product' => $product])
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
