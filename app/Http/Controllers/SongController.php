<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{


    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'audio_file' => 'required|mimes:audio/mpeg,mpga,mp3,wav|max:20480',
        ]);

        $song = new Song;
        $song->title = $request->title;
        $song->artist = $request->artist;

        // Handle Cover Image
        $coverImage = $request->file('cover_image');
        $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
        $coverImage->move(public_path('images'), $coverImageName);
        $song->cover_image = $coverImageName;

        // Handle Audio File
        $audioFile = $request->file('audio_file');
        $audioFileName = time() . '_' . $audioFile->getClientOriginalName();
        $audioFile->move(public_path('audio'), $audioFileName);
        $song->audio_file = $audioFileName;

        $song->save();

        return redirect("/");
    }

}
