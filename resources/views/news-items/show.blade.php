@extends('layouts.app')

@section('content')
    <header class="jumbotron">
        @if($newsItem)
            <h1 class="model-title float-left">{{{$newsItem['title']}}}</h1>
        @else
            <h1 class="model-title float-left">{{$error}}</h1>
        @endif
            <a class="nav-link float-right" href="{{route('news')}}">Terug naar nieuwsoverzicht</a>
    </header>

    <div class="container">
        @if($newsItem)
            <article>
                <p>{{$newsItem['description']}}</p>
                <img src="{{$newsItem['image']}}" alt="{{$newsItem['title']}}"/>
            </article>
        @endif
    </div>
@endsection
