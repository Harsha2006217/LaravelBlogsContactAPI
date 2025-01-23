<?php

namespace App\Http\Controllers;

use App\Http\Actions\DeleteReviewAction;
use Illuminate\Http\Request;

class DeleteReviewController extends Controller
{
    public function __invoke(Request $request, DeleteReviewAction $deleteReviewAction)
    {
        $result = $deleteReviewAction->__invoke($request->id);

        return response()->json([
            'message' => $result['message'],
        ], 200);
    }
}
