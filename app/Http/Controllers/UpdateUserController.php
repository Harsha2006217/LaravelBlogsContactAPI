<?php

namespace App\Http\Controllers;

use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\UpdateUserRequest;

class UpdateUserController extends Controller
{
    public function __invoke(UpdateUserRequest $request, UpdateUserAction $updateUserAction)
    {
        $user = $updateUserAction->__invoke($request->id, $request->validated());

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user,
        ], 200);
    }
}
