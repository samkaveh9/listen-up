<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $musics = Music::latest()->limit(10)->get();
        $latestMusics = Music::query()->limit(5)->orderByDesc('id')->get();
        $popularMusics = maxViews(5);
        $bestSong = maxViews(1);
        return view('index', [
            'musics' => $musics,
            'latestMusics' => $latestMusics,
            'popularMusics' => $popularMusics,
            'bestSong' => $bestSong,
        ]);
    }

    public function single()
    {
        return view('single');
    }

}
