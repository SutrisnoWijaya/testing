<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    About
                </div>
                <div>
                    <h2>{!! $name !!}</h2>
                    <p>
                        <a href="mailto:{!! $email !!}">{!! $email !!}</a>
                    </p>
                    @foreach($phone as $item)
                        <p>{!! $item !!}</p>
                    @endforeach
                    @forelse($address as $item)
                        <p>{!! $item !!}</p>
                    @empty
                        NO DATA    
                    @endforelse
                </div>

                <div class="links">
                    <a href="{{ url('/home') }}">Home</a>
                </div>
            </div>
        </div>
    </body>
</html>
