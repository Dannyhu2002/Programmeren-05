{{--@extends ('layouts.master')--}}

{{--@section('sidebar')--}}
{{--    <header class="jumbotron">--}}
{{--        <h1 class="name">Danny's foodporn page</h1>--}}
{{--    </header>--}}
{{--@endsection--}}

{{--@section ('content')--}}
{{--    <header class="jumbotron">--}}
{{--        <h2 class="head">Food feed</h2>--}}
{{--        <div id="link-container">--}}
{{--            <a href="{{route('food.create')}}">Add a new foodporn</a>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <div class="container">--}}
{{--        @if ($message = Session::get('success'))--}}
{{--            <div class="alert alert-success alert-block">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="row">--}}
{{--            @foreach($categories as $category)--}}
{{--                <h3 class="card-title">{{ $category->title}}</h3>--}}
{{--                @foreach($category->foodItems as $foodItem)--}}
{{--                    <div class="col sm card border-0">--}}

{{--                        <img class="card-img" src="{{$foodItem->image}}" alt="{{$foodItem->title}}" >--}}
{{--                        <p class="card-text">{{$foodItem->title}}</p>--}}


{{--                        <div id="link-container">--}}
{{--                            <a href="{{route('food.show', $foodItem->id)}}">Food details</a>--}}
{{--                        </div>--}}
{{--                        @endcan--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
