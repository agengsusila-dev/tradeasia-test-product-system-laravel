<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name.id' => 'required|string|max:255',
            'name.en' => 'required|string|max:255',
            'hs_code' => 'required|string|max:50|unique:products,hs_code,' . $this->product->id,
            'cas_number' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description.id' => 'required|string',
            'description.en' => 'required|string',
            'application.id' => 'required|string',
            'application.en' => 'required|string',
            'meta_title.id' => 'required|string|max:255',
            'meta_title.en' => 'required|string|max:255',
            'meta_keyword.id' => 'required|string|max:255',
            'meta_keyword.en' => 'required|string|max:255',
            'meta_description.id' => 'required|string|max:1000',
            'meta_description.en' => 'required|string|max:1000',
        ];
    }
}
