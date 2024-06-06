<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('style.css') }}">
</head>
<body>
    <nav>
        <ul>
            {{-- --}}
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('contact') }}">Contatti</a></li>
            <li><a href="{{ route('about') }}">Chi Siamo</a></li>
        </ul>
    <h1>About</h1>
    </nav>
    <main>
        <div class="about">
            {{ $message }}
        </div>
    </main>
</body>
</html>