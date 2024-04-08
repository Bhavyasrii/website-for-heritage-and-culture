<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddShopValidationRequest extends FormRequest
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
            'name' => 'required|string',
            'owner_name' => 'required|string',
            'email' => 'required|email|unique:shops',
            'mobile_number' => 'required|string',
            'address' => 'required',
            'description' => 'required',
            'shop_image' => 'nullable|image',
            'license_number'=> 'nullable|numeric',
            'items' => 'required'

        ];
    }
}
