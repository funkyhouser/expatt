<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    </head>
    <style>
    html {
    scroll-padding-top: 120px;
    }
    </style>


<body class="min-h-screen font-sans antialiased text-[#636363] bg-[#3c137c]">

    <div class="z-50 flex-col hidden transform -translate-y-1/2 right-5 lg:fixed lg:flex top-1/2">
        <div class="flex flex-col items-center px-2 py-4 space-y-4 text-white bg-black/25 rounded-2xl">
            <i class="cursor-pointer fa-brands fa-facebook-f"></i>
            <i class="cursor-pointer fa-brands fa-instagram"></i>
            <i class="cursor-pointer fa-brands fa-linkedin-in"></i>
            <i class="cursor-pointer fa-brands fa-x-twitter"></i>
            <i class="cursor-pointer fa-brands fa-youtube"></i>
            <i class="cursor-pointer fa-brands fa-tiktok"></i>
        </div>
    </div>
    {{-- <x-banner /> --}}

    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow dark:bg-gray-800">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="mt-20">
        {{ $slot }}
    </main>
    <footer class="bg-[#3C137C] py-6 lg:py-12 text-white">
        <div class="flex flex-col max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-6">
                <img src="{{ asset('images/logo.svg') }}" alt="Soy EXPAT" />
                <div class="flex justify-end space-x-5">
                    <img src="{{ asset('images/social/facebook.svg') }}" alt="facebook" />
                    <img src="{{ asset('images/social/instagram.svg') }}" alt="instagram" />
                    <img src="{{ asset('images/social/linkedin.svg') }}" alt="linkedin" />
                </div>
            </div>
            <div class="flex justify-between text-xs font-bold text-white lg:justify-end lg:space-x-5">
                <a href="#">Términos y condiciones</a>
                <a href="#">Política de privacidad</a>
            </div>
        </div>
    </footer>
    <div class="bg-[#25E59B] py-3 text-center">
        <a href="https://www.casakiev.com/" target="_blank" class="uppercase text-[10px] text-[#3C137C] font-extrabold">powered by casakiev</a>
    </div>
    @stack('modals')

    @livewireScripts
</body>

</html>
