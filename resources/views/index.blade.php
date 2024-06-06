<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('style.css') }}">
    </head>
    <body class="antialiased">
        <nav>
            <ul>
                {{-- --}}
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('contact') }}">Contatti</a></li>
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
            </ul>
        <h1>Home Page</h1>
        </nav>
        <main>
            
        </main>
    </body>
</html>
