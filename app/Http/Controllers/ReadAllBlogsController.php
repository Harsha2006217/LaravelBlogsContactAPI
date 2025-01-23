<?php

namespace App\Http\Controllers;

use App\Http\Actions\ReadAllBlogsAction;

class ReadAllBlogsController extends Controller
{
    public function __invoke(ReadAllBlogsAction $readAllBlogsAction)
    {
        $blogs = $readAllBlogsAction->__invoke();

        return response()->json([
            'message' => 'Blogs fetched successfully',
            'data' => $blogs,
        ], 200);
    }
}
