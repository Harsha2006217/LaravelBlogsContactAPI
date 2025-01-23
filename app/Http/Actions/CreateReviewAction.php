<?php

namespace App\Http\Actions;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateReviewAction
{
    public function __invoke(array $data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:10',
            'rating' => 'required|integer|between:1,5',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return Review::create($data);
    }
}
