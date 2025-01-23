<?php

namespace App\Http\Controllers;

use App\Http\Actions\CreateReviewAction;
use App\Http\Requests\CreateReviewRequest;

class CreateReviewController extends Controller
{
    public function __invoke(CreateReviewRequest $request, CreateReviewAction $createReviewAction)
    {
        $review = $createReviewAction->__invoke($request->validated());

        return response()->json([
            'message' => 'Review created successfully',
            'data' => $review,
        ], 201);
    }
}
