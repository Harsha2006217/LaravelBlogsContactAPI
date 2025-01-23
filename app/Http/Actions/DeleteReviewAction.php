<?php

namespace App\Http\Actions;

use App\Models\Review;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteReviewAction
{
    public function __invoke(int $id)
    {
        $review = Review::find($id);

        if (!$review) {
            throw new ModelNotFoundException('Review not found');
        }

        $review->delete();

        return ['message' => 'Review deleted successfully'];
    }
}
