<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Video;

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

    public function videos($user)
    {
        return Video::where('user_id', $user->id)->get();
    }
}
