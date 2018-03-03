<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Sample') - Alex's App</title>
        {{-- Css link --}}
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        {{-- Navbar --}}
        @include('layouts._header')

        {{-- Content --}}
        <div class="container">
            @yield('content')

            {{-- footer --}}
            @include('layouts._footer')
        </div>
    </body>
</html>
