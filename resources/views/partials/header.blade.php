
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('head-title', 'Laravel - Comics')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!--Bootstrap -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css' integrity='sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==' crossorigin='anonymous'/>

        <!--Reset-->
        <link rel="stylesheet" href="http://casaalmada.hostinggratis.it/doc/css/reset.css">
        <!--Style-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="{{asset('images/dc-logo.png')}}" alt="logo dc">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('comics')}}">Comics</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('news')}}">News</a>
                </li>
            </ul>

            </div>
        </div>
    </nav>



</header>
