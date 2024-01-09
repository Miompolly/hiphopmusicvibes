<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hip-Hop Music Vibes</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen relative" style="background-image: url('{{ asset('images/back.jpg') }}')">

    <nav class=" text-white p-4 relative z-10 font-semibold" >
        <div class="container mx-auto flex justify-between items-center">
            <a href="/home" class="text-2xl font-bold">Hip-Hop Vibes</a>

            <div class="space-x-4 ">
                <a href="/music" class="hover:text-gray-300">Music</a>
                <a href="/video" class="hover:text-gray-300">Video</a>
                <a href="/artist" class="hover:text-gray-300">Artist</a>
                <a href="/album" class="hover:text-gray-300">Album</a>

                @guest
                    <a href="/login" class="hover:text-gray-300">Login</a>
                    <a href="/signup" class="hover:text-gray-300">Signup</a>
                @else

                    <a href="#" class="hover:text-gray-300">Profile</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="hover:text-gray-300">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mx-auto p-8">
        {{-- @yield('content') --}}

        <div class="absolute top-0 left-0 w-full h-full text-white bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-semibold mb-4">Welcome to Hip-Hop Music Vibes</h1>
                <p class="text-lg">Discover the latest and greatest in hip-hop music.</p>
                <a href="" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Explore Artists</a>
            </div>
        </div>
    </div>
</body>
</html>
