<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function coverImage()
    {
        return $this->hasOne(CoverImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function audioFiles()
    {
        return $this->hasMany(AudioFile::class);
    }

    public function audioFile()
    {
        return $this->hasOne(AudioFile::class);
    }
}
