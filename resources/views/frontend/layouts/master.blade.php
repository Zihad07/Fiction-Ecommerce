<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        @livewireStyles
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
        @yield('before-head')

    </head>
    <body>

        @include('frontend.partials._header')

        @yield('main')

        @include('frontend.partials._footer')


        @livewireScripts
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('before-body')
    </body>
</html>
