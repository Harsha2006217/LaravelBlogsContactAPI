<?php

namespace App\Http\Controllers;

use App\Http\Actions\ReadAllUsersAction;

class ReadAllUsersController extends Controller
{
    public function __invoke(ReadAllUsersAction $readAllUsersAction)
    {
        $users = $readAllUsersAction->__invoke();

        return response()->json([
            'message' => 'Users fetched successfully',
            'data' => $users,
        ], 200);
    }
}
