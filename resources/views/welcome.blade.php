<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HTGAW5.0</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <div id="titleblock">
            <h1 id="title" style="margin-top: 10vh;margin-bottom: 10px;">How to Get Away with 5.0</h1>
            <h2 id="subtitle">work smarter, not harder</h2>
        </div>
         @if (Route::has('login'))
            <div class="links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
    </body>
</html>
