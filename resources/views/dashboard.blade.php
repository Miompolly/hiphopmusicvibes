{{-- <x-app-layout> --}}
    @extends("layouts.dash")

    @section('content')
    <div class="max-w-md mx-auto mt-8 bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Upload a Song</h2>

        <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title:</label>
                <input type="text" name="title" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="artist" class="block text-sm font-medium text-gray-600">Artist:</label>
                <input type="text" name="artist" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="cover_image" class="block text-sm font-medium text-gray-600">Cover Image:</label>
                <input type="file" name="cover_image" accept="image/*" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="audio_file" class="block text-sm font-medium text-gray-600">Audio File:</label>
                <input type="file" name="audio_file" accept="audio/*" class="mt-1 p-2 w-full border rounded-md">

            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Upload Song</button>
            </div>
        </form>
    </div>
    @endsection
