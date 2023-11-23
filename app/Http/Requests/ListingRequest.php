<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
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
            'beds' => 'required|integer|min:1|max:10',
            'baths' => 'required|integer|min:1|max:10',
            'area' => 'required|integer|min:100|max:1500',
            'city' => 'required|string',
            'code' => 'required|string',
            'street' => 'required|string',
            'street_nr' => 'required|integer|min:1|max:1000',
            'price' => 'required|integer|min:100|max:20000',
        ];
    }
}