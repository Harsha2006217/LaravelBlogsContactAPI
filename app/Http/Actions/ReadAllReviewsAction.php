<?php

namespace App\Http\Actions;

use App\Models\Review;

class ReadAllReviewsAction
{
    public function __invoke()
    {
        return Review::with('user')->get();
    }
}
