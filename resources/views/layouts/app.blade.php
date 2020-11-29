<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    </head>
    <body>
        @include('sweetalert::alert')
        <x-nav></x-nav>
        <main role="main" class="container p-3">
            @yield('content')
        </main>
    </body>
</html>
