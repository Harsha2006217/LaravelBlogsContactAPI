<?php

namespace App\Http\Actions;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UpdateReviewAction
{
    public function __invoke(int $id, array $data)
    {
        $review = Review::find($id);

        if (!$review) {
            throw new \Exception('Review not found');
        }

        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:10',
            'rating' => 'required|integer|between:1,5',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $review->update($data);

        return $review;
    }
}
