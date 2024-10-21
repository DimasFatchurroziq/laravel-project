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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255|unique:products,name,' . $this->route('product'), 
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0', // Harga minimal 0, opsional
            'stock' => 'sometimes|required|integer|min:1', // Stok minimal 1, opsional
            'category_id' => 'sometimes|required|exists:categories,id' // Kategori valid, opsional
        ];
    }
}
