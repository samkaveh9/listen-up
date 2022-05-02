<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.musics.index', ['musics' => Music::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musics.create', ['artists' => Artist::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image') && $request->hasFile('file')) {
            $file = $request->file('image');
            $fileExtension = strtolower($file->getClientOriginalExtension());
            $fileName = date('Ymdhis') . '.' . $fileExtension;
            $file->move(storage_path('app/public/'), $fileName);

            $src = $request->file('file');
            $srcExtension = strtolower($src->getClientOriginalExtension());
            $srcName = date('Ymdhis') . '.' . $srcExtension;
            $src->move(storage_path('app/public/musics/'), $srcName);

            Music::create(array_merge($request->only('title', 'artist_id', 'content'), ['image' => $fileName], ['file' => $srcName]));
        }
        return redirect(route('musics.index'))->with('message', 'Music created succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
}
