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
        <h2>Home Page</h2>
        </nav>
        <main>
            <div class="home">
                <h1>benvenuti nella home page di usiamo tutti laravel è perche!!!</h1>
                <p> qui una serie di aziende che supportano il nostro progetto credendo ciecamente in noi: </p>
                {{-- foreach and using $loop --}}
                @foreach ($companies as $item)
                    {{ $item }}
                    @if ($loop->last)
                    .
                  @else
                    ,
                  @endif
                @endforeach
                </ul>
            </div>
        </main>
    </body>
</html>
