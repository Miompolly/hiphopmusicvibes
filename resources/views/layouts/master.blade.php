<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hip-Hop Music Vibes')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">


    <aside class="bg-gray-900 text-white w-1/5 p-4">
        <div class="text-2xl font-extrabold mb-8"> <a href="/" class="text-2xl font-extrabold">Hip-Hop Music Vibes</a></div>
        <ul class="space-y-4">
            <li><a href="/" class="hover:text-gray-300">Home</a></li>
            <li><a href="/search" class="hover:text-gray-300">Search</a></li>


        </ul>
    </aside>

    <div class="flex-1 bg-cover bg-no-repeat bg-center relative"
        style="background-image: url('{{ asset('images/back.jpg') }}')">
        <!-- Navigation -->
        <nav class="text-white p-4 relative z-10 font-semibold">
            <div class="container mx-auto flex justify-between items-center">
                <!-- You can keep this navigation or customize as needed -->
                <a href="/" class="text-2xl font-extrabold"></a>

                <div class="space-x-4">

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Upload</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
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
    </div>

</body>

</html>
