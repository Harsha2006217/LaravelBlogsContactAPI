<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:10',
            'rating' => 'required|integer|between:1,5',
            'user_id' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Een titel is verplicht.',
            'body.required' => 'Een bericht is verplicht.',
            'body.min' => 'Het bericht moet minimaal 10 tekens bevatten.',
            'rating.required' => 'Een beoordeling is verplicht.',
            'rating.between' => 'De beoordeling moet tussen 1 en 5 zijn.',
            'user_id.required' => 'Een geldige gebruikers-ID is vereist.',
            'user_id.exists' => 'De opgegeven gebruikers-ID bestaat niet.',
        ];
    }
}
