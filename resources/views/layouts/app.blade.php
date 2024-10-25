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

    <!-- select2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    .select2-container--default .select2-selection--single {
        display: flex;
        align-items: center;
        max-width: 100%; 
        height: auto;
        overflow: hidden;
    }

    .select2-results__option {
        display: flex;
        align-items: center;
        white-space: nowrap;
    }

    .select2-results__option img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }
</style>

</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">



















    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('equipos.index') }}" :active="request()->routeIs('equipos.index')">
                        {{ __('Equipos') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('jugadores.index') }}" :active="request()->routeIs('jugadores.index')">
                        {{ __('Jugadores') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('jornadas.index') }}" :active="request()->routeIs('jornadas.index')">
                        {{ __('Jornadas') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('punteos.index') }}" :active="request()->routeIs('punteos.index')">
                        {{ __('Punteos') }}
                    </x-nav-link>




                    <x-nav-link href="{{ route('reportes.jugadoresGeneral') }}" :active="request()->routeIs('reportes.jugadoresGeneral')" class="pl-9">
                        {{ __('Rep. Jugadores') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('reportes.jugadoresEquipo') }}" :active="request()->routeIs('reportes.jugadoresEquipo')">
                        {{ __('Rep. Jugadores*Equipo') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('reportes.equipos') }}" :active="request()->routeIs('reportes.equipos')">
                        {{ __('Rep Equipos') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('reportes.maximosAnotadores') }}" :active="request()->routeIs('reportes.maximosAnotadores')">
                        {{ __('Rep. Anotadores') }}
                    </x-nav-link>


                  
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>






















        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

</body>

</html>