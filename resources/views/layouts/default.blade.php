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
        <header class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <a href="/" id="logo">Sample App</a>
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/help">Help</a></li>
                            <li><a href="#">Sign Up</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        {{-- Content --}}
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
