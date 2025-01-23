<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReadAllBlogsRequest extends FormRequest
{
    /**
     * 
     */
    public function authorize(): bool
    {
        return true; 
    }

    /**
     * 
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'search' => 'nullable|string|max:255',
            'per_page' => 'nullable|integer|min:1',
            'page' => 'nullable|integer|min:1',
        ];
    }

    /**
     * 
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'search.string' => 'De zoekterm moet een geldige string zijn.',
            'search.max' => 'De zoekterm mag niet langer zijn dan 255 tekens.',
            'per_page.integer' => 'Het aantal per pagina moet een geldig getal zijn.',
            'per_page.min' => 'Het aantal per pagina moet minstens 1 zijn.',
            'page.integer' => 'De pagina moet een geldig getal zijn.',
            'page.min' => 'De pagina moet minstens 1 zijn.',
        ];
    }
}
