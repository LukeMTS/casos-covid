<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
    <style>
        @import url("http://fonts.googleapis.com/css?family=Ubuntu:400,300,700");

        body {
            font-family: 'Ubuntu', sans-serif !important;
        }
    </style>

    @yield('styles')
</head>

<body>
    <div id="app">
        <main class="container py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
