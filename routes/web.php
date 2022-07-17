<?php

use App\Http\Controllers\AlbumMusicController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\\'] ,function(){
    Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('home');
    Route::get('/single', [\App\Http\Controllers\MainController::class, 'single']);
    Route::resource('artists', ArtistController::class);
    Route::resource('musics', MusicController::class);
    Route::resource('albums', AlbumController::class);
    Route::get('album/music', [AlbumMusicController::class, 'index'])->name('album-music.index');
    Route::get('album/{album}/music/assign', [AlbumMusicController::class, 'create'])->name('album-music.create');
    Route::post('album/music/assign', [AlbumMusicController::class, 'store'])->name('album-music.store');
});

Route::get('/test', function (){
    //$t = \App\Models\Music::query()->orderBy('view', 'desc')->value('view');
//    $t = \App\Models\Music::query()->max('view')->get();
    $t = \App\Models\Music::query()->selectRaw('max(view)')->get();
    $t = \App\Models\Music::find(\App\Models\Music::max('view'));
    dd($t);
});



