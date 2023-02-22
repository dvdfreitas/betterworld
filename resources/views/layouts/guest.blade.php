<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="flex justify-between px-10 h-24 items-center bg-zinc-800">

            <div class="flex items-center gap-x-5">
                <a href="https://www.instagram.com/ambulanceforhearts/"><img style="width:50px; height:40px;" src="https://www.ambulanceforhearts.pt/img/icons/instagram.svg" alt="Instagram"></a>
                <a href="https://www.facebook.com/AmbulanceForHearts/"><img style="width:50px; height:40px;" src="https://www.ambulanceforhearts.pt/img/icons/facebook.svg" alt="Facebook"></a>
            </div>

            <div class="flex items-center gap-x-10">
                <a class="hover:text-xl ease-in duration-200 text-white font-bold text-lg p-5" href="">Messages</a>
                <a class="hover:text-xl ease-in duration-200 text-white font-bold text-lg p-5" href="">Global Locations</a>
                <a class="hover:text-xl ease-in duration-200 text-white font-bold text-lg p-5" href="">Contact Us</a> 
            </div>

        </nav>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
