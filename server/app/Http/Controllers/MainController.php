<?php

namespace App\Http\Controllers;

use App\Repositories\VideoRepository;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(VideoRepository $videoRepository)
    {
        $videos = $videoRepository->recent();

        return view('main', ['videos' => $videos]);
    }
}
