<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'tag' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'title_uz' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'title_crl' => 'nullable|string',
            'decision_number_date_uz' => 'nullable|string|max:255',
            'decision_number_date_ru' => 'nullable|string|max:255',
            'decision_number_date_crl' => 'nullable|string|max:255',
            'name_uz' => 'nullable|string',
            'name_ru' => 'nullable|string',
            'name_crl' => 'nullable|string',
        ];
    }
}
