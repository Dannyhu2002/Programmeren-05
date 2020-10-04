@extends('layouts.master')

@section('content')

    <header class="jumbotron">
            <h1 class="model-title float-left">Food</h1>
        <a class="nav-link float-right" href="{{route('food.create')}}">Add a new foodporn</a>
    </header>

    <aside>
        <ul>
            @foreach($categories as $category)
                @php/** @var App\Category $category */ @endphp
                <li><a href="#{{$category->title}}">{{$category->title}}</a> </li>
            @endforeach
        </ul>
    </aside>
    <div class="container">
        @foreach($categories as $category)
            @php/** @var App\Category $category */ @endphp
            <h2 id="{{$category->title}}">{{$category->title}}</h2>

            <div class="row">
            @foreach($category->foodItems as $foodItem)
                <div class="col-sm card border-0">
                    <h3 class="card-title">{{$foodItem->title}}</h3>
                    <p>
                        <b>{{ $foodItem->category->title }}</b>
                    </p>
                    <p class="card-text">{{$foodItem->description}}</p>
                    <img class="card-img" src="{{$foodItem->image}}" alt="{{$foodItem->title}}"/>
                    <a class="btn btn-light" href="{{route('food.show', $foodItem->id)}}">Food details</a>
                </div>
            @endforeach
            </div>
        @endforeach
    </div>

@endsection
