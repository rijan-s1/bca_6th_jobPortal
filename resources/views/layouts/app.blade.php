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

<body class="font-sans antialiased ">
    @include('layouts.alert')
    <div class="flex min-h-screen bg-gray-50">

        <!-- Sidebar -->
        <aside
            class="bg-gradient-to-b from-slate-900 via-indigo-900 to-purple-900 text-white w-60 flex flex-col p-5 space-y-6">
            <!-- Brand -->
            <div class="flex items-center gap-2 text-2xl font-bold tracking-wide mb-6">
                <i class="fa-solid fa-briefcase"></i>
                <h2 class="font-extrabold text-2xl tracking-wide">Job<span class="text-yellow-300">Finder</span></h2>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 space-y-2">
                <a href="{{ route('dashboard') }}"
                    class="font-bold text-lg block hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 rounded-lg
                     hover:text-white px-4 py-2">
                    Dashboard
                </a>
                <a href="{{ route('tags.index') }}"
                    class="font-bold text-lg block hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 rounded-lg
                     hover:text-white px-4 py-2">
                    Tags
                </a>

                <a href="{{ route('dashboard') }}"
                    class="font-bold text-lg block hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 rounded-lg
                     hover:text-white px-4 py-2">
                    Companies
                </a>

                <a href="{{ route('dashboard') }}"
                    class="font-bold text-lg block hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 rounded-lg
                     hover:text-white px-4 py-2">
                    Users
                </a>

                <a href="{{ route('dashboard') }}"
                    class="font-bold text-lg block hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 rounded-lg
                     hover:text-white px-4 py-2">
                    Jobs
                </a>
            </nav>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit"
                    class="flex items-center gap-3 px-4 py-2 w-full text-left font-bold text-lg hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 rounded-lg hover:text-white transition">

                    <img src="https://img.icons8.com/ios-filled/50/ffffff/logout-rounded-left.png" alt="logout icon"
                        class="w-6 h-6">

                    <span>Logout</span>
                </button>
            </form>



        </aside>
        <div class="p-4 flex-1">
            <h1 class="text-2xl font-bold">@yield('title')</h1>
            <hr class="bg-blue-600 h-1">
            <div class="mt-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
