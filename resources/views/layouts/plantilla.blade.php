<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Desarrolador web full stack en Barcelona. PHP, Laravel, Mysql, HTML, CSS, Tailwind y más">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"  />
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    @include('layouts.navigation')
    @include('header')
    <div id="root">
        <body>
            @yield('content')
            <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        </body>
    </div>
    @include('footer')
</html>