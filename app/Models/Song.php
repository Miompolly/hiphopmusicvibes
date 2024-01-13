<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'artist', 'cover_image', 'audio_file', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
