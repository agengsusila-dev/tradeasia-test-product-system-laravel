<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto mb-12 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg mb-12"
                style="background-image: url('{{ asset('storage/bn-product.webp') }}'); background-size: cover; background-position: center; height: 200px;">

                <div class="flex items-center justify-center h-full w-full bg-black/40">
                    <div class="text-center text-white px-4">
                        <h1 class="text-4xl md:text-5xl font-bold">
                            Welcome to the Tradeasia Product Management Page
                        </h1>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __('A centralized platform designed to help administrators efficiently manage product information, including chemical names, HS Codes, CAS numbers, descriptions, applications, and SEO metadata. This page empowers the Tradeasia team to keep product data accurate, multilingual, and up-to-date, ensuring seamless synchronization between internal systems and public-facing content.') }}

                    <p class="p-3 text-md">
                        Please click the <a href="{{ route('admin.products.index') }}" class="underline">Products</a>
                        menu to
                        continue!
                    </p>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
