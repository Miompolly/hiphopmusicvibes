<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $songs = Auth::user()->songs;

        return view('audio', compact('songs'));
    }

    public function create()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'audio_file' => 'required|mimes:mp3,wav',
        ]);

        $coverImage = $request->file('cover_image')->store('covers');
        $audioFile = $request->file('audio_file')->store('audio');

        $song = new Song([
            'title' => $request->get('title'),
            'artist' => $request->get('artist'),
            'cover_image' => $coverImage,
            'audio_file' => $audioFile,
        ]);

        Auth::user()->songs()->save($song);

        return redirect()->route('/audio')->with('success', 'Song uploaded successfully!');
    }
}
