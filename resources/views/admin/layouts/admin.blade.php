<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="relative min-h-screen md:flex " x-data="{ open: true }">
        {{-- sidebar nav --}}
        <aside :class="{ '-translate-x-full': !open }"
            class="z-10 bg-blue-800 text-white w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0
     overflow-y-auto transition ease-in-out dur shadow-lg">
            <div class="flex items-center justify-between px-2">
                {{-- logo --}}
                <div class="flex items-center px-2 space-x-2">
                    <a href="">
                        <x-application-logo class="block h-9 w-auto fill-current text-blue-100 dark:text-gray-200" />
                    </a>
                    <span class="text-2xl font-extrabold">
                        Admin
                    </span>
                </div>
                <button @click="open =!open" type="button"
                    class="md:hidden inline p-2 items-center justify-center rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="block w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>

            <nav>
                {{-- nav links --}}
                <div class="nav-links">
                    <ul class="space-y-2">
                        <li>
                          <a href="#" class="block py-2 px-4">Home</a>
                        </li>
                        <li>
                          <a href="#" class="block py-2 px-4">About</a>
                        </li>
                        <li>
                          <a href="#" class="block py-2 px-4">Services</a>
                        </li>
                        <li>
                          <a href="#" class="block py-2 px-4">Contact</a>
                        </li>
                      </ul>
                </div>
            </nav>
        </aside>
        <main>
            {{-- main page content --}}
            <nav class="bg-blue-900 shadow-lg">
                <div class="mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between md:justify-end h-16">
                        <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                            {{-- mobile button --}}
                            <button type="button" @click="open =!open" @click.away="open =false"
                                class="inline-flex items-center justify-center
                        p-2 rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                            </button>
                        </div>
                    </div>

                </div>

            </nav>
            <div>
                <x-slot name="content"></x-slot>
            </div>
        </main>
    </div>
</body>

</html>
