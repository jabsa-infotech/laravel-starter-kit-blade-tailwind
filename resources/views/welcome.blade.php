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

<body class="font-sans text-gray-900 antialiased">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="min-h-screen flex flex-col md:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div
            class="grid grid-cols-1 md:grid-cols-2 w-full text-center mt-6 px-6 py-4 dark:bg-gray-900 overflow-hidden sm:rounded-lg">
            <div class="self-center">
                <h1 class="text-3xl dark:text-gray-100">Laravel Starter Kit</h1>
            </div>
            <div class="">
                <div class="mb-3 dark:text-gray-100">Powered by</div>

                <div class="justify-center items-center grid grid-cols-2 gap-4">
                    <a href="https://laravel.com/"
                        class="bg-white rounded px-3 py-10 hover:bg-slate-50 hover:scale-[0.9] hover:transition-all">Laravel
                        10.x</a>
                    <a href="https://tailwindcss.com/"
                        class="bg-white rounded px-3 py-10 hover:bg-slate-50 hover:scale-[0.9] hover:transition-all">Tailwind
                        3.x</a>
                    <a href="https://alpinejs.dev/"
                        class="bg-white rounded px-3 py-10 hover:bg-slate-50 hover:scale-[0.9] hover:transition-all">Alpine
                        3.x</a>
                    <a href="https://github.com/laravel/breeze"
                        class="bg-white rounded px-3 py-10 hover:bg-slate-50 hover:scale-[0.9] hover:transition-all">Breeze</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
