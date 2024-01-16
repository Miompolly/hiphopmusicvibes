@extends('layouts.dash')

@section('content')
    <div class="top-0 left-0 w-full h-full text-white bg-gray-900 bg-opacity-50 flex items-center justify-center border-solid border-black">

        @foreach ($songs as $song)
            <div class="border p-8 pb-10 align-middle rounded-md">
                <label>{{ $song->title }}</label>
                <span>By {{ $song->artist }}</span>


                @if ($song->coverImage)
                    <img src="{{ asset($song->coverImage->path) }}" alt="Cover Image" class="w-80 h-80 object-cover rounded-full p-7 ">
                @endif

                @if ($song->audioFiles && count($song->audioFiles) > 0)
                    <ul>
                        @foreach ($song->audioFiles as $audioFile)
                            <audio controls class="w-80 ">
                                <source src="{{ asset($audioFile->path) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        @endforeach
                    </ul>
                @else
                    <p>No audio files available for this song.</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection
