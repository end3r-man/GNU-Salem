<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body>

        <div class="w-auto h-auto bg-[#061522] flex flex-col gap-y-2">

            @livewire('home.comp.nav-bar')

            {{ $slot }}

            @livewire('home.comp.footer')

        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    </body>
</html>
