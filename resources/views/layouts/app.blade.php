<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')

        <title>Laravel Model Controller</title>
    </head>
    <body>
        @include('partials.header')

       <main>
            @yield('content')
       </main>
    </body>
</html>