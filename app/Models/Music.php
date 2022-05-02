<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Album;

class Music extends Model
{
    use HasFactory;

    protected $table = "music";

    protected $fillable = [
        "title",
        "content",
        "image",
        "file",
        "artist_id",
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

}
