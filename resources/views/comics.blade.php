@extends('layouts.master')

@section('content')
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <h1>comics</h1>
                @foreach ($comics as $comic)
                    <h2>{{ $comic['title'] }}</h2>
                    <img src="{{ $comic['image'] }}" alt="">
                    <img src="{{ $comic['image-hero'] }}" alt="">
                    <img src="{{ $comic['image-cover'] }}" alt="">

                    <h4>{{ $comic['price'] }}$</h4>
                    {{htmlspecialchars_decode($comic['body'])}}
                    @dump($comic)

                @endforeach
            </div>



        </div>
    </div>
</body>




@endsection

