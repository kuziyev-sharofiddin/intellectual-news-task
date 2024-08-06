<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LeaderRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'fullName_uz' => 'nullable|string|max:255',
            'fullName_ru' => 'nullable|string|max:255',
            'fullName_crl' => 'nullable|string|max:255',
            'position_uz' => 'nullable|string',
            'position_ru' => 'nullable|string',
            'position_crl' => 'nullable|string',
        ];
    }
}
