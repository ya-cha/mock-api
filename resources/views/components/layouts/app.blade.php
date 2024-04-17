<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>{{ $title ?? config('app.name') }}</title>
    </head>
    <body>
        <div class="my-6 border-b border-teal-600">
            <h1 class="my-6 text-center text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-br from-lime-600 to-teal-600">{{ config('app.name') }}</h1>
        </div>

        {{ $slot }}

        @livewire('wire-elements-modal')
    </body>
</html>
