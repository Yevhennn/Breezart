<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ __('Professional Air Conditioning Installation, Maintenance, and Repair Services') }}">
        <meta name="author" content="Breezart Service">

        <title>@yield('title', __('Breezart Service - Professional AC Maintenance'))</title>
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-aircondi-service.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <main>
            @include('layouts.partials.nav')

            @yield('content')
        </main>

        @include('layouts.partials.footer')


        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/animated-headline.js') }}"></script>
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
