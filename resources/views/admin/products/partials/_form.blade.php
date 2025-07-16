@php
    $isEdit = isset($product);
@endphp

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-1">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Name (ID)</label>
        <input type="text" name="name[id]" value="{{ old('name.id', $isEdit ? $product->name['id'] ?? '' : '') }}"
            class="w-full rounded border-gray-300" required>
        @error('name.id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Name (EN)</label>
        <input type="text" name="name[en]" value="{{ old('name.en', $isEdit ? $product->name['en'] ?? '' : '') }}"
            class="w-full rounded border-gray-300" required>
        @error('name.en')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mb-1">
    <label class="block text-sm font-medium text-gray-700 mb-1">HS Code</label>
    <input type="text" name="hs_code" value="{{ old('hs_code', $isEdit ? $product->hs_code ?? '' : '') }}"
        class="w-full rounded border-gray-300" required>
    @error('hs_code')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-1">
    <label class="block text-sm font-medium text-gray-700 mb-1">CAS Number</label>
    <input type="text" name="cas_number" value="{{ old('cas_number', $isEdit ? $product->cas_number ?? '' : '') }}"
        class="w-full rounded border-gray-300">
    @error('cas_number')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-1">
    <label class="block text-sm font-medium text-gray-700 mb-1">Picture</label>
    <input type="file" name="image" class="w-full text-sm">

    @error('image')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror

    @if (isset($product) && $product->image)
        <div class="mt-1">
            <p class="text-sm text-gray-600 mb-1">Preview:</p>
            <img src="{{ asset('storage/' . $product->image) }}" alt="preview"
                class="w-96 h-auto rounded shadow border">
        </div>
    @endif
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Description (ID)</label>
    <textarea name="description[id]" rows="3" class="w-full rounded border-gray-300">{{ old('description.id', $isEdit ? $product->description['id'] ?? '' : '') }}</textarea>
    @error('description.id')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Description (EN)</label>
    <textarea name="description[en]" rows="3" class="w-full rounded border-gray-300">{{ old('description.id', $isEdit ? $product->description['id'] ?? '' : '') }}</textarea>
    @error('description.en')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Application (ID)</label>
    <textarea name="application[id]" rows="2" class="w-full rounded border-gray-300">{{ old('application.id', $isEdit ? $product->application['id'] ?? '' : '') }}</textarea>
    @error('application.id')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Application (EN)</label>
    <textarea name="application[en]" rows="2" class="w-full rounded border-gray-300">{{ old('application.en', $isEdit ? $product->application['en'] ?? '' : '') }}</textarea>
    @error('application.en')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Title (ID)</label>
        <input type="text" name="meta_title[id]"
            value="{{ old('meta_title.id', $isEdit ? $product->meta_title['id'] ?? '' : '') }}"
            class="w-full rounded border-gray-300">
        @error('meta_title.id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Title (EN)</label>
        <input type="text" name="meta_title[en]"
            value="{{ old('meta_title.en', $isEdit ? $product->meta_title['en'] ?? '' : '') }}"
            class="w-full rounded border-gray-300">
        @error('meta_title.en')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Keyword (ID)</label>
        <input type="text" name="meta_keyword[id]"
            value="{{ old('meta_keyword.id', $isEdit ? $product->meta_keyword['id'] ?? '' : '') }}"
            class="w-full rounded border-gray-300">
        @error('meta_keyword.id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Keyword (EN)</label>
        <input type="text" name="meta_keyword[en]"
            value="{{ old('meta_keyword.en', $isEdit ? $product->meta_keyword['en'] ?? '' : '') }}"
            class="w-full rounded border-gray-300">
        @error('meta_keyword.en')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Description (ID)</label>
        <textarea name="meta_description[id]" rows="2" class="w-full rounded border-gray-300">{{ old('meta_description.id', $isEdit ? $product->meta_description['id'] ?? '' : '') }}</textarea>
        @error('meta_description.id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Description (EN)</label>
        <textarea name="meta_description[en]" rows="2" class="w-full rounded border-gray-300">{{ old('meta_description.id', $isEdit ? $product->meta_description['id'] ?? '' : '') }}</textarea>
        @error('meta_description.en')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="pt-4">
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
        {{ $isEdit ? 'Update Product' : 'Save Product' }}
    </button>
</div>
