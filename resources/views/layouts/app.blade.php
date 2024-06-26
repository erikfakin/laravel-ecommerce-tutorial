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
    @if (session('error'))
        <div class="mx-auto max-w-screen-xl flex justify-end fixed inset-x-0 top-24 px-8" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 5000)" x-show="show" role="alert">
            <div class="min-w-96 max-w-xl shadow-xl rounded-xl border border-gray-100 bg-red-50 py-8">
                <div class="flex items-start gap-4 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <span class="text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>

                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900"> Greška! </strong>

                        <p class="mt-1 text-sm text-gray-700">{{ session('error') }}</p>
                    </div>

                    <button type="button" x-on:click="show = false"
                        class="text-gray-500 transition hover:text-gray-600">
                        <span class="sr-only">Dismiss popup</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="mx-auto max-w-screen-xl flex justify-end fixed inset-x-0 top-24 px-8" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 5000)" x-show="show" role="alert">
            <div class="min-w-96 max-w-xl shadow-xl rounded-xl border border-gray-100 bg-green-50 py-8">
                <div class="flex items-start gap-4 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <span class="text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>

                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900"> {{ session('success') }} </strong>


                    </div>

                    <button type="button" x-on:click="show = false"
                        class="text-gray-500 transition hover:text-gray-600">
                        <span class="sr-only">Dismiss popup</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif


    <x-layout.header />
    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
