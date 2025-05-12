<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap + App Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                To-Do App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <main class="py-5">
        <div class="container text-center">
            <h1 class="display-4">Welcome to the To-Do App</h1>
            <p class="lead">Manage your tasks easily with authentication</p>
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-3">Log in</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register</a>
            @else
                <a href="{{ url('/tasks') }}" class="btn btn-success btn-lg">Go to Tasks</a>
            @endguest
        </div>
    </main>
</div>
</body>
</html>
