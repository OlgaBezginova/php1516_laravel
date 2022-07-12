<?php

namespace App\Http\Controllers;

use App\Repositories\VideoRepository;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(VideoRepository $videoRepository)
    {
        return view('videos.list', ['videos' => $videoRepository->list()]);
    }

    public function view($id, VideoRepository $videoRepository)
    {
        if (!$video = $videoRepository->byId($id)) {
            abort(404);
        }

        return view('videos.video', ['video' => $video]);
    }

    public function create()
    {

    }

    public function add()
    {

    }

    public function update($id)
    {

    }


    public function edit($id)
    {

    }

    public function delete($id)
    {

    }

}
