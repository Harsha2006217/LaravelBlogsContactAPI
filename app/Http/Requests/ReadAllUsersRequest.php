<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReadAllUsersRequest extends FormRequest
{
    /**
     * 
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * 
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
