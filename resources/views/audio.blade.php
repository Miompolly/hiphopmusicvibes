@extends('layouts.dash')

@section('content')
    <div class="top-0 left-0 w-full h-full text-white bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <h1>List of Audio Files</h1>

        @foreach ($songs as $song)
            <div>
                <h3>{{ $song->title }}</h3>
                <p>Artist: {{ $song->artist }}</p>

                {{-- Display cover image --}}
                @if ($song->coverImage)
                    <img src="{{ asset($song->coverImage->path) }}" alt="Cover Image" class="w-20 h-24">
                @endif

                {{-- Display audio files --}}
                @if ($song->audioFiles && count($song->audioFiles) > 0)
                    <p>Audio Files:</p>
                    <ul>
                        @foreach ($song->audioFiles as $audioFile)
                            <li>{{ $audioFile->path }}</li>
                            <audio controls>
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
