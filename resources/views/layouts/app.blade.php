<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    {{-- style livewire --}}
    @livewireStyles

    {{-- Script Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-templates.header />


    <main class="w-full">
        {{ $slot }}
    </main>

    <x-templates.footer />

    {{-- script livewire --}}
    @livewireScripts
</body>

</html>
