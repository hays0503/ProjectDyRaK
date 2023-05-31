<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Игра в дурака</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

    {{-- <script type="text/javascript" src="{{ asset('js/cards.js') }}"></script> --}}
</head>

<body class="antialiased">
    <div class="container text-center MainWidget">
        <h1 class="align-self-center text-light">Страницы авторизации=>Приватная часть</h1>
        <form class="bg-primary col-3 offset-4 border rounded" method="GET" action="{{ route('user.logout') }}">
            <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Выйти</button>
        </form>
    </div>

</body>

</html>
