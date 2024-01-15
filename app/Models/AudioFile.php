<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioFile extends Model
{
    use HasFactory;
    
    protected $fillable = ['audio_file'];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
