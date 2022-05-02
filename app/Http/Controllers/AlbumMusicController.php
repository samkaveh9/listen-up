<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Music;
use Illuminate\Http\Request;

class AlbumMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.albums.album-music', ['albums' => Album::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Album $album
     * @return \Illuminate\Http\Response
     */
    public function create(Album $album)
    {
        $musics = Music::all();
        session()->put('album', request()->route('album')->id);
        return view('admin.albums.store', compact([$album, $musics]));
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::find(session()->get('album'));
        $album->musics()->sync($request->only('music_id'));
        return redirect(route('album-music.index'))->with('message', 'music assign to an album succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
