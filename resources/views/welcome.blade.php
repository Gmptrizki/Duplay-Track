<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duplay-Track</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex flex-col antialiased">

    {{-- Header --}}
    @include('layouts.partials.header')

    {{-- Konten --}}
    <div class="flex-1">
        @include('layouts.partials.welcome-content')
    </div>
    <div>
        @livewire('teacher-absent-today')
    </div>

    @include('layouts.partials.footer')

</body>

</html>