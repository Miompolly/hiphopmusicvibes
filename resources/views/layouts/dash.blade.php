<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title', 'Hip-Hop Music Vibes')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-no-repeat bg-center h-screen relative"
    style="background-image: url('{{ asset('images/back.jpg') }}')">

    <nav class=" text-white p-4 relative z-10 font-semibold">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold">Hip-Hop Music Vibes</a>

            <div class="space-x-4 ">


                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="hover:text-gray-300">Logout</button>
                </form>

            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mx-auto p-8">
        @yield('content')


    </div>
</body>

</html>
