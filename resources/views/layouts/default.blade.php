<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Station - @yield('title')</title>

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- styles -->
        <link rel="stylesheet" href="{{asset('css/global.css')}}">
        @yield('css')
    </head>
    <body>
        <!-- header -->
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
        <!-- footer -->
    </body>
</html>
