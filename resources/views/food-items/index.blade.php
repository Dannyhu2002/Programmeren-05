@extends ('layouts.master')

@section('sidebar')
    <header class="jumbotron">
        <h1 class="name">Danny's Foodporn page</h1>
    </header>
@endsection

@section ('content')
    <header class="jumbotron">
        <h2 class="head">Food feed</h2>
        <div id="link-container">
            @can('create_foodItems')
            <a href="{{route('food.create')}}">Add a new foodporn</a>
            @endcan
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
                        <h3>{{ $foodItem->category->title }}</h3>
                        <div>
                            <span><b>Tags: </b></span>
                        @foreach($foodItem->tags as $tag)
                            <span class="border border-dark btn" style="background-color: {{$tag->pivot->color}}">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                        <p class="card-text">{{$foodItem->description}}</p>
                        <img class="card-img" src="{{$foodItem->image}}" alt="{{$foodItem->title}}"/>

                        @if(auth()->user() && !auth()->user()->hasLiked($foodItem))
                            <form action="/like" method="post">
                                @csrf
                                <input type="hidden" name="likeable" value="{{ get_class($foodItem) }}">
                                <input type="hidden" name="id" value="{{ $foodItem->id }}">
                                <button type="submit" class="like">
                                    Like
                                </button>
                            </form>
                        @else
                            <p class="afterlike"  disabled>
                                {{ $foodItem->likes()->count() }} likes
                            </p>
                        @endif

                        <a class="btn btn-light" href="{{route('food.show', $foodItem->id)}}">Food details</a>
                        @can('delete_foodItems')
                            <div id="link3-container">
                                <a href="{{route('food.delete', ['foodItem_id'=>$foodItem->id])}}" style="color:red;">Delete</a>
                            </div>
                        @endcan

                        @can('edit_foodItems')
                            <div id="link4-container">
                                <a href="{{route('food.edit', $foodItem->id)}}"  style="color:red;">Edit</a>
                            </div>
                        @endcan
                    </div>
                @endforeach
            </div>
    </div>
@endsection
