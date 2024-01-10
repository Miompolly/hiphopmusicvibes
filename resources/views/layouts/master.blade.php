<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> @yield('title', 'Hip-Hop Music Vibes')</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen relative" style="background-image: url('{{ asset('images/back.jpg') }}')">

    <nav class=" text-white p-4 relative z-10 font-semibold" >
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold">Hip-Hop Music Vibes</a>

            <div class="space-x-4 ">
                <a href="/" class="hover:text-gray-300">Home</a>
                <a href="/audio" class="hover:text-gray-300">Audio</a>
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
        @yield('content')


    </div>
</body>
</html>
