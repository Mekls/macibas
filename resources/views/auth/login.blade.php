<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Macibas - Login</title>
    </head>
    <body class="login-page">
       <div class="login-container">
            <div class="login-header">
                <header class="login-header">Pieslēdzies Mācībām</header>
            </div>
            <form method="POST" action="/">
                @csrf
                <div class="input-field">
                    <label for="personal_code">Lietotājvārds</label>
                    <input class="form-input" name="personal_code" id="personal_code" type="text" required placeholder="Personas kods">
                </div>
                <div class="input-field">
                    <label for="password">Parole</label>
                    <input class="form-input" name="password" id="password" type="password" required placeholder="Parole">
                </div>
                <button type="submit" class="button-form">Pieslēgties</button>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                @endif
            </form>
       </div>
    </body>
</html>