<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    public function list()
    {
        return User::get();
    }

    public function byId($id)
    {
        return User::find($id);
    }
}
