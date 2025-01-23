<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|exists:reviews,id',
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:10',
            'rating' => 'required|integer|between:1,5',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'Review ID is verplicht.',
            'id.exists' => 'De review bestaat niet.',
            'title.required' => 'Een titel is verplicht.',
            'body.required' => 'Een bericht is verplicht.',
            'body.min' => 'Het bericht moet minimaal 10 tekens bevatten.',
            'rating.required' => 'Een beoordeling is verplicht.',
            'rating.between' => 'De beoordeling moet tussen 1 en 5 zijn.',
        ];
    }
}
