<?php

namespace App\Repositories;

use App\Models\Video;

class VideoRepository
{
    public function list()
    {
        return Video::get();
    }

    public function byId($id)
    {
        return Video::find($id);
    }
}
