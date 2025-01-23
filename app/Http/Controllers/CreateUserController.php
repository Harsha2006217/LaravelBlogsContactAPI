<?php

namespace App\Http\Controllers;

use App\Http\Actions\CreateUserAction;
use App\Http\Requests\CreateUserRequest;

class CreateUserController extends Controller
{
    public function __invoke(CreateUserRequest $request, CreateUserAction $createUserAction)
    {
        $user = $createUserAction->__invoke($request->validated());

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user,
        ], 201);
    }
}
