@extends('layouts.dash')
@section('title', 'Login-on-Hip-Hop Music Vibes')

@section('content')
    <div class="items-center justify-center flex">
        <div class="text-white bg-gray-900 w-1/2 flex items-center justify-center">
            <div class="p-7 px-20 border rounded mt-3">
                <div class="w-full flex text-center font-semibold text-md">
                    <label for="uploadmusic" class="border-b-2">Upload Your Music</label>
                </div>

                <div class="mb-4">
                    @if (session('message'))
                        <div class="bg-green-200 text-green-500">
                            {{ session('message') }}
                        </div>
                    @elseif (session('error'))
                        <div class="bg-red-200 text-red-500">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <form method="post" action="{{ url('loginUser') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="w-full flex text-center text-md py-2 mt-3">
                        <label>Name of Song</label><span class="text-red-700 font-bold px-2">*</span>
                    </div>
                    <div class="w-full flex text-center text-md">
                        <input type="text" class="border rounded text-black w-full p-2 outline-none" name="title"
                            id="name" placeholder="Enter your name of song">
                    </div>

                    <div class="w-full flex text-center text-md py-2 mt-3">
                        <label>Artist</label><span class="text-red-700 font-bold px-2">*</span>
                    </div>
                    <div class="w-full flex text-center text-md">
                        <input type="text" class="border text-black rounded w-full p-2 outline-none" name="artist"
                            id="artist" placeholder="Enter Artist name">
                    </div>

                    <div class="w-full flex text-center text-md py-2 mt-3">
                        <label>Upload</label><span class="text-red-700 font-bold px-2">*</span>
                    </div>
                    <div class="w-full flex text-center text-md">
                        <select name="media_type" id="media_type"
                            class="border rounded text-black w-full p-2 outline-none">
                            <option value="audio">Audio</option>
                            <option value="video">Video</option>
                        </select>
                    </div>

                    <div class="w-full flex text-center text-md py-2 mt-3">
                        <label>Main Media File</label><span class="text-red-700 font-bold px-2">*</span>
                    </div>
                    <div class="w-full flex text-center text-md">
                        <input type="file" name="media_file" accept="{{ session('media_type') == 'audio' ? 'audio/*' : 'video/*' }}" class="border text-black rounded w-full p-2 outline-none">
                    </div>

                    @if (session('media_type') == 'video')
                        <div class="w-full flex text-center text-md py-2 mt-3">
                            <label>Cover Image</label><span class="text-red-700 font-bold px-2">*</span>
                        </div>
                        <div class="w-full flex text-center text-md">
                            <input type="file" name="cover_image" accept="image/*" class="border text-black rounded w-full p-2 outline-none">
                        </div>
                    @endif

                    <div class="w-full flex text-center text-md py-3">
                        <button type="submit"
                            class="button rounded bg-green-500 text-white w-28 h-9 items-center flex justify-center">
                            Upload
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
