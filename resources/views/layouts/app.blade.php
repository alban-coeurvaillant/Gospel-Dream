<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="p-4">
        <div class="bg-light p-3">
            @include('layouts.navigation')
            <header class="p-3">{{ $header }}</header>
            <main class="main-container bg-white p-4">
                <div class="container-inner">
                {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
