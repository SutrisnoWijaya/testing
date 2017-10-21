<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Home
                </div>

                <div class="links">
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/contactus') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </body>
</html>
