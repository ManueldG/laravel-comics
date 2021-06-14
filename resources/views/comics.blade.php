@extends('layouts.master')

@section('content')
<body>
        <div class="content">
            <div class="title">

            </div>

                <div class=" my-5">

                    <div class="d-flex flex-wrap justify-content-center">
                        @foreach ($comics as $comic)

                            <div class="card mx-1 my-1">
                                <img src="{{ $comic['image'] }}" class="card-img-top" alt="">
                                <!--<a href="{{ $comic['image-hero'] }}">Copertina </a>-->
                                <!--<a href="{{ $comic['image-cover']  }}">Cover</a>
                                    <div class="card-body">-->
                                        <p class="card-title">{{ $comic['title'] }}</p>
                                    <!--<h4>{{ $comic['price'] }}$</h4>
                                    <p class="card-text">{{trim(strip_tags($comic['body']),'&nbsp;')}}</p>
                                    </div>-->
                            </div>

                        @endforeach
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>
</body>




@endsection

