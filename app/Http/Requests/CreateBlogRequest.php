<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:10',
            'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Een titel is verplicht.',
            'description.required' => 'Een beschrijving is verplicht.',
            'description.min' => 'De beschrijving moet minimaal 10 tekens bevatten.',
            'image_name.image' => 'Het bestand moet een afbeelding zijn.',
            'image_name.mimes' => 'De afbeelding moet een van de volgende typen zijn: jpeg, png, jpg, gif, svg.',
            'image_name.max' => 'De afbeelding mag niet groter zijn dan 2MB.',
            'user_id.required' => 'Een geldige gebruikers-ID is vereist.',
            'user_id.exists' => 'De opgegeven gebruikers-ID bestaat niet.',
        ];
    }
}
