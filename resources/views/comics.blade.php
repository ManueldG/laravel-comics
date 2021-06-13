@extends('layouts.master')

@section('content')
<body>
        <div class="content">
            <div class="title m-b-md">
                <h1>Comics</h1>
            </div>

                <div class="mx-3">

                    <div class="d-flex flex-wrap ">
                        @foreach ($comics as $comic)

                            <div class="card">
                                <img src="{{ $comic['image'] }}" class="card-img-top" alt="">
                                <a href="{{ $comic['image-hero'] }}">Copertina </a>
                                <a href="{{ $comic['image-cover']  }}">Cover</a>
                                    <div class="card-body">
                                        <h2 class="card-title">{{ $comic['title'] }}</h2>
                                    <h4>{{ $comic['price'] }}$</h4>
                                    <p class="card-text">{{trim(strip_tags($comic['body']),'&nbsp;')}}</p>
                                    </div>
                            </div>

                        @endforeach
                    </div>

                </div>


        </div>
</body>




@endsection

