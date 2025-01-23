<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|exists:blogs,id',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'Het ID van de blog is vereist om de blog te kunnen verwijderen.',
            'id.exists' => 'De opgegeven blog bestaat niet.',
        ];
    }
}
