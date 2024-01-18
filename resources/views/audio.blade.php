@extends('layouts.dash')

@section('content')
    <div
        class="top-0 left-0 w-full h-full gap-4 text-white bg-gray-900 bg-opacity-50 flex items-center justify-center border-solid border-black">

        @foreach ($songs as $song)
            <div class="border p-8 pb-10 align-middle rounded-md">
                <label>{{ $song->title }}</label>
                <span>By {{ $song->artist }}</span>


                @if ($song->coverImage)
                    <img src="{{ asset($song->coverImage->path) }}" alt="Cover Image"
                        class="w-80 h-80 object-cover rounded-full p-7 ">
                @endif

                @if ($song->audioFiles && count($song->audioFiles) > 0)
                    <div class="audio-container">
                        {{-- <button class="audio-control" id="prev-btn">Previous</button> --}}
                        @foreach ($song->audioFiles as $index => $audioFile)
                            <div class="audio-item" data-index="{{ $index }}">
                                <audio controls>
                                    <source src="{{ asset($audioFile->path) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                {{-- <div class="audio-controls">
                                    <button class="audio-control play-btn"><img src="images/last.svg"></button>
                                    <button class="audio-control next-btn">Next</button>
                                    <button class="audio-control download-btn">
                                        <a href="{{ asset($audioFile->path) }}" download>Download</a>
                                    </button>
                                </div> --}}
                            </div>
                        @endforeach

                    </div>
                @else
                    <p>No audio files available for this song.</p>
                @endif

                <style>
                    /* Hide default audio controls */
                    .custom-audio {
                        appearance: none;
                        -webkit-appearance: none;
                        margin: 0;
                        width: 100%;
                    }

                    .custom-audio::-webkit-media-controls-panel {
                        display: none !important;
                        -webkit-appearance: none;
                    }

                    .custom-audio::-webkit-media-controls-play-button {
                        display: none !important;
                        -webkit-appearance: none;
                    }
                </style>
            </div>
        @endforeach
    </div>
@endsection
