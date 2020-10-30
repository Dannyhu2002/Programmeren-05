@extends('layouts.master')

@section('content')
    <header class="jumbotron">
        @if($foodItem)
            <h1 class="model-title float-left">{{{$foodItem['title']}}}</h1>
        @else
            {{--        <h1 class="modal-title float-left">{{$error}}</h1>--}}
        @endif
        <a class="-link float-right" href="{{route('food')}}">Back to Food feed</a>
    </header>

    <div class="container">
        @if($foodItem)
            <article>
                <p>{{$foodItem['description']}}</p>
                <img src="{{$foodItem['image']}}" alt="{{$foodItem['title']}}"/>
            </article>
        @endif
    </div>
@endsection
