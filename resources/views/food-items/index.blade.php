@extends ('layouts.master')

@section('sidebar')
    <header class="jumbotron">
        <h1 class="name">Danny's Foodporn pagek</h1>
    </header>
@endsection

@section ('content')
    <header class="jumbotron">
        <h2 class="head">Food feed</h2>
        <div id="link-container">
            <a href="{{route('food.create')}}">Add a new foodporn</a>
        </div>
    </header>

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif

            <div class="row">
                @foreach($foodItems as $foodItem)
                    @php/** @var App\FoodItem $foodItem */ @endphp
                    <div class="col-sm card border-0">
                        <h2 class="card-title">{{$foodItem->title}}</h2>
                        <p>
                            {{ $foodItem->category }}
                        </p>
                        <p class="card-text">{{$foodItem->description}}</p>
                        <img class="card-img" src="{{$foodItem->image}}" alt="{{$foodItem->title}}"/>
                        <a class="btn btn-light" href="{{route('food.show', $foodItem->id)}}">Food details</a>
                    </div>
                @endforeach
            </div>
    </div>
@endsection
