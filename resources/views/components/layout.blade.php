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
                    @cannot('crud-actions')
                    <li><a href="/timetable" class=" {{request()->is('timetable') ? 'current-page' : ''}}">Timetable</a></li>
                    @endcannot
                    @can('view-info')
                    <li><a href="/forms" class=" {{request()->is('forms') ? 'current-page' : ''}}">Forms</a></li>
                    @endcan
                    <li><a href="/lessons" class=" {{request()->is('lessons') ? 'current-page' : ''}}">Lessons</a></li>
                    @can('crud-actions')
                    <li><a href="/subjects" class=" {{request()->is('subjects') ? 'current-page' : ''}}">Subjects</a></li>
                    <li><a href="/users" class=" {{request()->is('users') ? 'current-page' : ''}}">Users</a></li>
                    @endcan
                </ul>
            </nav>
            <form method="POST" action="/logout">
                @csrf
                <button class="log-button">Logout</button>
            </form>
        </header>
        <div class="slot-body">
            {{$slot}} 
        </div>
    </body>
</html>
