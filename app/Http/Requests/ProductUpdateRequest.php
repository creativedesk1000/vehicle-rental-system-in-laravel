<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change to your authorization logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255', // Added string and max length validation
            'price' => 'required|numeric|min:0', // Ensure price is a positive number
            'detail' => 'nullable|string', // Changed to nullable if detail can be empty
        ];
    }
}