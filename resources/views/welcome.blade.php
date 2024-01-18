@extends('layouts.master')
@section('title', 'Hip-Hop Music Vibes')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-8 text-white p-8">

    @foreach ($songs as $song)
        <div class="bg-gray-900 bg-opacity-80 p-3 rounded-md shadow-lg">
            <label class="text-sm font-semibold">{{ $song->title }}</label>
            <p class="text-gray-500">By {{ $song->artist }}</p>

            @if ($song->coverImage)
                <img src="{{ asset($song->coverImage->path) }}" alt="Cover Image"
                    class="w-full h-40 object-cover rounded-md mt-4">
            @endif

            @if ($song->audioFiles && count($song->audioFiles) > 0)
                <div class="mt-4 space-y-2">
                    @foreach ($song->audioFiles as $index => $audioFile)
                        <div class="audio-item" data-index="{{ $index }}">
                            <audio controls class="w-full">
                                <source src="{{ asset($audioFile->path) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 mt-4">No audio files available for this song.</p>
            @endif
        </div>
    @endforeach

</div>
@endsection
