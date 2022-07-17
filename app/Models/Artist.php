<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Music;
use App\Models\Album;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'bio'];


    public function musics()
    {
        return $this->hasMany(Music::class);
    }

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

}
