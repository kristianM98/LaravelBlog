<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') / bitch be bloggin</title>

    <!-- Styles -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body id="{{ body_id() }}" class="{{ body_class() }}">

    <header class="container">
        @include('flash::message')
        @include('partials.errors')
        @include('partials.navigation')
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>



<!-- Scripts -->
<script src="{{ URL::asset('js/app.js') }}" defer></script>
<script src="{{ URL::asset('js/jquery.js') }}" defer></script>

</body>
</html>
