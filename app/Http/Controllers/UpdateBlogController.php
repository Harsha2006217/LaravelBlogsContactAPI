<?php

namespace App\Http\Controllers;

use App\Http\Actions\UpdateBlogAction;
use App\Http\Requests\UpdateBlogRequest;

class UpdateBlogController extends Controller
{
    public function __invoke(UpdateBlogRequest $request, UpdateBlogAction $updateBlogAction)
    {
        $blog = $updateBlogAction->__invoke($request->id, $request->validated());

        return response()->json([
            'message' => 'Blog updated successfully',
            'data' => $blog,
        ], 200);
    }
}
