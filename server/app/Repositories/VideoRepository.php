<?php

namespace App\Repositories;

use App\Models\Video;

class VideoRepository
{
    public function initialQuery()
    {
        return Video::join('users', 'users.id', '=', 'videos.user_id');
    }

    public function list()
    {
        return $this->initialQuery()->get(['videos.*', 'users.username', 'users.firstname', 'users.lastname']);
    }

    public function byId($id)
    {
        return $this->initialQuery()->find($id);
    }
}
