@props([
    "title" => "Trails-Quests"
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body class="">

    <div class="bg-[#FDFDFC] text-[#1b1b18] flex items-center lg:justify-center min-h-screen flex-col m-0">
        <header class="w-full lg:min-w-4xl  text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav
                    class="lg:min-w-4xl py-4 flex items-center justify-end gap-4 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 text-white">
                    @auth
                        @include('layouts.navigation')
                    @else
                        <a href="{{ route('login') }}"
                            class="border-b-2 border-transparent hover:border-gray-100 inline-block px-5 py-1.5 rounded-sm text-sm leading-normal transition duration-150">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="border-b-2 border-transparent hover:border-gray-100 inline-block px-5 py-1.5 rounded-sm text-sm leading-normal transition duration-150 pr-5">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div
            class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="text-black w-[75vw]">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>