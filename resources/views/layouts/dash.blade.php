<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hip-Hop Music Vibes')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-no-repeat bg-center h-screen relative"
    style="background-image: url('{{ asset('images/back.jpg') }}')">

    <!-- Navigation -->
    <nav class="text-white p-4 relative  font-semibold">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold">Hip-Hop Music Vibes</a>

            <div class="space-x-4">
                <a href="/" class="hover:text-gray-300">Home</a>
                <a href="/audio" class="hover:text-gray-300">Audio</a>
                <a href="/video" class="hover:text-gray-300">Video</a>
                <a href="/artist" class="hover:text-gray-300">Artist</a>
                <a href="/album" class="hover:text-gray-300">Album</a>

                @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold  hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">upload</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold  hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold  hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth

                @endif
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mx-auto p-8">
        @yield('content')
    </div>

</body>

</html>
