@extends('layouts.master')
@section('title', 'Hip-Hop Music Vibes')

@section('content')
    <div
        class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 2xl:grid-cols-5 gap-2 text-white p-1 max-h-[600px] overflow-auto">
        @foreach ($songs as $song)
            <div class="bg-gray-900 bg-opacity-80 p-3 rounded-md shadow-lg">

                @if ($song->coverImage)
                    <img src="{{ asset($song->coverImage->path) }}" alt="Cover Image"
                        class="w-full h-28 object-cover rounded-md mt-4">
                @endif

                @if ($song->audioFiles && count($song->audioFiles) > 0)
                    <div class="mt-4 space-y-2">
                        @foreach ($song->audioFiles as $audioFile)
                            <div class="audio-item" data-id="{{ $audioFile->id }}">
                                <audio controls class="w-full" id="audio{{ $audioFile->id }}" style="display: none">
                                    <source src="{{ asset($audioFile->path) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <span onclick="hideShowAudio('{{ $audioFile->id }}')" class="text-green-500 cursor-pointer">
                                    @svg('fas-play', ['class' => 'text-green-500', 'width' => '16', 'height' => '16','cursor'=>'pointer'])

                                </span>

                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 mt-4">No audio files available for this song.</p>
                @endif

                <label class="text-sm font-semibold">{{ $song->title }}</label>
                <p class="text-gray-500 w-full">By {{ $song->artist }}</p>
            </div>
        @endforeach



    </div>
@endsection
