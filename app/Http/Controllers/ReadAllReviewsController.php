<?php

namespace App\Http\Controllers;

use App\Http\Actions\ReadAllReviewsAction;

class ReadAllReviewsController extends Controller
{
    public function __invoke(ReadAllReviewsAction $readAllReviewsAction)
    {
        $reviews = $readAllReviewsAction->__invoke();

        return response()->json([
            'message' => 'Reviews fetched successfully',
            'data' => $reviews,
        ], 200);
    }
}
