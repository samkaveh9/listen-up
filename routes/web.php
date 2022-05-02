<?php

use App\Http\Controllers\AlbumMusicController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::group(['namespace' => 'App\Http\Controllers\\'] ,function(){
    Route::resource('artists', ArtistController::class);
    Route::resource('musics', MusicController::class);
    Route::resource('albums', AlbumController::class);
    Route::get('album/music', [AlbumMusicController::class, 'index'])->name('album-music.index');
    Route::get('album/{album}/music/assign', [AlbumMusicController::class, 'create'])->name('album-music.create');
    Route::post('album/music/assign', [AlbumMusicController::class, 'store'])->name('album-music.store');
});





