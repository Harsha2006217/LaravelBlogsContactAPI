<?php

namespace App\Http\Actions;

use App\Models\User;

class ReadAllUsersAction
{
    public function __invoke()
    {
        return User::all();
    }
}
