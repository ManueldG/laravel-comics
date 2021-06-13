
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('head-title', 'Laravel - Comics')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <!--Style-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

<header>

    <div class="container ">


        <div >
            <img src="{{asset('img/dc-logo.png')}}" alt="logo dc">
        </div>

        <nav>

            <a class="special-a active" href="{{route('comics')}}">Comics</a>
            <a class="special-a" href="{{route('news')}}">News</a>

        </nav>

    </div>

</header>
