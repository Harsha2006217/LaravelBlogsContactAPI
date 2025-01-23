<?php

namespace App\Http\Actions;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteUserAction
{
    public function __invoke(int $id)
    {
        $user = User::find($id);

        if (!$user) {
            throw new ModelNotFoundException('User not found');
        }

        $user->delete();

        return ['message' => 'User deleted successfully'];
    }
}
