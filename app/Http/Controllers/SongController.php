<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function create()
    {
        return view('song.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'artist' => 'required|string',
            'audio_file' => 'required|mimes:audio/*',
            'cover_image' => 'required|image',
        ]);

        $user = auth()->user();

        $song = new Song([
            'title' => $request->input('title'),
            'artist' => $request->input('artist'),
            'audio_file' => $request->file('audio_file')->store('audio'),
            'cover_image' => $request->file('cover_image')->store('images'),
        ]);

        $user->songs()->save($song);

        return redirect()->back()->with('message', 'Song uploaded successfully!');
    }
}
