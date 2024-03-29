<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use App\Models\CoverImage;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        \Log::info('Store method called');

        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        \Log::info('Validation passed');

        $song = new Song();
        $song->title = $request->title;
        $song->artist = $request->artist;
        $user = Auth::user();
        $user->songs()->save($song);
        $song->save();

        \Log::info('Song saved');

        if ($request->hasFile('audio_file') && $request->file('audio_file')->isValid()) {
            $audioFile = new AudioFile();
            $audioFile->song_id = $song->id;

            $audioFile = new AudioFile();
            $audioFile->song_id = $song->id;

            $audioFileName = time().'_'.$request->file('audio_file')->getClientOriginalName();
            $request->file('audio_file')->move(public_path('audio'), $audioFileName);
            $audioFile->path = 'audio/'.$audioFileName;
            $audioFile->audio_file = $audioFileName;

            $audioFile->save();

            \Log::info('Audio file saved');
        } else {
            \Log::error('Error uploading audio file');

            return back()->with('error', 'Error uploading audio file.');
        }

        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            $coverImage = new CoverImage();
            $coverImage->song_id = $song->id;
            $coverImageName = time().'_'.$request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move(public_path('images'), $coverImageName);
            $coverImage->path = 'images/'.$coverImageName;

            $coverImage->save();

            \Log::info('Cover image saved');
        } else {
            \Log::error('Error uploading cover image');

            return back()->with('error', 'Error uploading cover image.');
        }

        \Log::info('All processes completed successfully');

        return back()->with('message', 'Song uploaded successfully!');
    }

    public function audio()
    {
        $songs = Song::with(['coverImage', 'audioFiles'])->get();

        return view('welcome', compact('songs'));
    }
}
