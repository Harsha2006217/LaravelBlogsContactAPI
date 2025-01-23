<?php

namespace App\Http\Controllers;

use App\Http\Actions\DeleteUserAction;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function __invoke(Request $request, DeleteUserAction $deleteUserAction)
    {
        $result = $deleteUserAction->__invoke($request->id);

        return response()->json([
            'message' => $result['message'],
        ], 200);
    }
}
