<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Игра в дурака</title>.

<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

<!-- Styles -->
@vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

{{-- <script type="text/javascript" src="{{ asset('js/cards.js') }}"></script> --}}
</head>

<body class="antialiased">
    <div class="container text-center MainWidget">
        <h1 class="align-self-center text-light">Страницы авторизации</h1>
        <div class="">
            <form class="bg-primary col-3 offset-4 border rounded" method="POST" action="{{ route('user.login') }}">
                @csrf<div class="form-group">

                    <label for="email" class="col-form-label-lg">Email</label>
                    <input class="form-control" id="email" name="email" type="text" value=""
                        placeholder="email" />
                    @error('email')
                        <div class="alert alert-danger">{{ message }}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label for="password" class="col-form-label-lg">password</label>
                    <input class="form-control" id="password" name="password" type="text" value=""
                        placeholder="password" />
                    @error('password')
                        <div class="alert alert-danger">{{ message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
