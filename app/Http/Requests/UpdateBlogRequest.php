<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|exists:blogs,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'Blog ID is verplicht.',
            'id.exists' => 'De blog bestaat niet.',
            'title.required' => 'De titel van de blog is verplicht.',
            'title.max' => 'De titel mag niet langer zijn dan 255 tekens.',
            'description.required' => 'De beschrijving van de blog is verplicht.',
            'image_name.image' => 'Het bestand moet een afbeelding zijn.',
            'image_name.mimes' => 'De afbeelding moet een van de volgende typen zijn: jpeg, png, jpg, gif, svg.',
            'image_name.max' => 'De afbeelding mag niet groter zijn dan 2MB.',
        ];
    }
}
