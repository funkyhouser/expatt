<nav x-data="{ open: false, atTop: true }" @scroll.window="atTop = window.pageYOffset>80?false:true"
    class="fixed top-0 left-0 z-20 w-full bg-[#3C137C] shadow-xl">
    <!-- Primary Navigation Menu -->
    <div class="flex items-center justify-between max-w-screen-xl px-4 mx-auto my-auto transition-all duration-300 ease-in-out sm:px-6 lg:px-8"
        :class="(atTop === false) ? 'h-16' : 'h-20'">
        <div class="flex">
            <!-- Logo -->
            <a class="flex items-center shrink-0" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" class="transition-all duration-300 ease-in-out"
                    :class="(atTop === false) ? 'h-5' : 'h-8'" alt="Soy EXPAT" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden text-xs font-bold sm:flex sm:items-center">
            @if (request()->routeIs('home'))
                <x-nav-link href="#" :active="request()->routeIs('dashboard')">
                    Quiénes Somos
                </x-nav-link>
                <x-nav-link href="#" :active="request()->routeIs('dashboard')" class="pr-0">
                    Conviértete en Sponsor
                </x-nav-link>
            @else
            <x-nav-link href="{{ url('/vivir-en/argentina#conoce-argentina') }}" :active="request()->routeIs('dashboard')">
                Conoce Argentina
            </x-nav-link>
            <x-nav-link href="{{ url('/vivir-en/argentina#informacion-util') }}" :active="request()->routeIs('dashboard')">
                Información útil
            </x-nav-link>
            <x-nav-link href="{{ url('/vivir-en/argentina#conoce-argentina') }}" :active="request()->routeIs('dashboard')">
                Comienza
            </x-nav-link>
            <x-nav-link href="#" :active="request()->routeIs('dashboard')">
                Disfruta
            </x-nav-link>
            <x-nav-link href="#" :active="request()->routeIs('dashboard')">
                Asistencia
            </x-nav-link>
            <x-nav-link href="#" :active="request()->routeIs('dashboard')" class="pl-2 pr-2 ">
                <i class="fa-solid fa-user text-[#25E59B] hover:text-white"></i>
            </x-nav-link>
            <x-nav-link href="#" :active="request()->routeIs('dashboard')" class="pl-2 pr-2 ">
                <i class="fa-solid fa-bell text-[#25E59B] hover:text-white"></i>
            </x-nav-link>
            <x-nav-link href="#" :active="request()->routeIs('dashboard')"  class="pl-2 pr-0">
                <i class="fa-solid fa-magnifying-glass text-[#25E59B] hover:text-white"></i>
            </x-nav-link>
            @endif

        </div>


        <!-- Hamburger -->
        <div class="flex items-center -mr-2 sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 transition duration-150 ease-in-out rounded-md hover:text-[#25E59B] text-[#25E59B] focus:outline-none  focus:text-gray-500 ">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" fill="#25E59B" color="#25E59B" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" fill="#25E59B" color="#25E59B" />
                </svg>
            </button>
        </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="flex items-center px-4">
                    <div>
                        <div class="text-base font-medium text-gray-800 dark:text-gray-200">name </div>
                        <div class="text-sm font-medium text-gray-500">email </div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="#" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="#" x-data>
                        @csrf

                        <x-responsive-nav-link href="#" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>


                </div>
            </div>
        @endauth
    </div>
</nav>
