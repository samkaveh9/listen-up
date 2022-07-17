<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Music;
use App\Models\Artist;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['artist_id', 'title', 'content', 'image'];


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function musics()
    {
        return $this->belongsToMany(Music::class);
    }


}
