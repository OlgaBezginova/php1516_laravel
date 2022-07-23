<?php

namespace App\Repositories;

use App\Models\Video;

class VideoRepository
{
    public function initialQuery()
    {
        return Video::join('users', 'users.id', '=', 'videos.user_id')->select('videos.*', 'users.username', 'users.firstname', 'users.lastname');
    }

    public function list()
    {
        return $this->initialQuery()->get();
    }

    public function byId($id)
    {
        return $this->initialQuery()->find($id);
    }
}
