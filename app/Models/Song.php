<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    public function audioFile()
    {
        return $this->hasOne(AudioFile::class);
    }

    public function coverImage()
    {
        return $this->hasOne(CoverImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
