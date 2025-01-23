<?php

namespace App\Http\Controllers;

use App\Http\Actions\DeleteBlogAction;
use Illuminate\Http\Request;

class DeleteBlogController extends Controller
{
    public function __invoke(Request $request, DeleteBlogAction $deleteBlogAction)
    {
        $result = $deleteBlogAction->__invoke($request->id);

        return response()->json([
            'message' => $result['message'],
        ], 200);
    }
}
