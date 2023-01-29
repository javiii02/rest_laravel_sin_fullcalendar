<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        * {
            font-family: 'Aboreto', cursive;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="bg-white shadow-md" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-green-800 bg-clip-text md:text-2xl hover:text-green-800"
                    style="color: black" href="/">
                    Cheers. Bar & Grill
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-black text-transparent bg-clip-text" style="color: black" href="/">Inicio</a>
                <a class="text-black text-transparent bg-clip-text" style="color: black"
                    href="{{ route('categories.index') }}">Nuestra Carta</a>
                <a class="text-black text-transparent bg-clip-text" style="color: black"
                    href="{{ route('menus.index') }}">Contacto</a>
                <a class="text-black text-transparent bg-clip-text" style="color: black"
                    href="{{ route('reservations.step.one') }}">¡Haz tu reserva!</a>

                @if (Auth::check())
                    {{-- {{ __(':name', ['name' => Auth::user()->name]) }} --}}
                    <a class="text-black text-transparent bg-clip-text" style="color: black"
                href="{{ route('login') }}">{{ __(':name', ['name' => Auth::user()->name]) }}</a>
                @else
                <a class="text-black text-transparent bg-clip-text" style="color: black"
                href="{{ route('login') }}">Iniciar sesión</a>
                @endif



                
            </div>
        </nav>
    </div>
    <div class="font-sans text-gray-900 antialiased min-h-screen">
        {{ $slot }}
    </div>

    <footer class="bg-gray-800 border-t border-gray-200">
        <footer class="bg-gray-800 border-t border-gray-200">
            <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
                <div class="flex flex-wrap justify-center">
                    <ul class="flex items-center space-x-8 text-white">
                        <li class="text-white">Inicio</li>
                        <li class="text-white">Nuestra Carta</li>
                        <li class="text-white">Contacto</li>
                    </ul>
                </div>
                {{-- LOGO FACEBOOK E INSTAGRAM --}}
                <div class="flex justify-center mt-4 lg:mt-0">
                    <a>
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5"
                                ry="5">
                            </rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
</body>

</html>
