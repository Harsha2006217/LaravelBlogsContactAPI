<?php

namespace App\Http\Controllers;

use App\Http\Actions\CreateBlogAction;
use App\Http\Requests\CreateBlogRequest;

class CreateBlogController extends Controller
{
    public function __invoke(CreateBlogRequest $request, CreateBlogAction $createBlogAction)
    {
        $blog = $createBlogAction->__invoke($request->validated());

        return response()->json([
            'message' => 'Blog created successfully',
            'data' => $blog,
        ], 201);
    }
}
