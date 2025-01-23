<?php

namespace App\Http\Controllers;

use App\Http\Actions\UpdateReviewAction;
use App\Http\Requests\UpdateReviewRequest;

class UpdateReviewController extends Controller
{
    public function __invoke(UpdateReviewRequest $request, UpdateReviewAction $updateReviewAction)
    {
        $review = $updateReviewAction->__invoke($request->id, $request->validated());

        return response()->json([
            'message' => 'Review updated successfully',
            'data' => $review,
        ], 200);
    }
}
