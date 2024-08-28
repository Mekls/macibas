@props(['active' =>false])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <title>{{$title}}</title>
    </head>
    <body class="template-body">
        <header class="nav-header">
            <p>Mācibas</p>   
            <nav>
                <ul class="nav-links">
                    <li><a href="/home" class=" {{request()->is('home') ? 'current-page' : ''}}">Home</a></li>
                    <li><a href="/lessons" class=" {{request()->is('lessons') ? 'current-page' : ''}}">Lessons</a></li>
                    <li><a href="/forms" class=" {{request()->is('forms') ? 'current-page' : ''}}">Forms</a></li>
                    <li><a href="#">Link4</a></li>
                </ul>
            </nav>
            <button class="log-button">Logout</button>
        </header>
        <div class="slot-body">
            {{$slot}} 
        </div>
    </body>
</html>
