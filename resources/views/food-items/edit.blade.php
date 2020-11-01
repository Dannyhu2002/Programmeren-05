@extends ('layouts.master')

@section ('content')
    @can('edit_foodItems')
        <header class="jumbotron">
            <h1 class="head">Edit Food Post</h1>
            <div id="link-container">
                <a href="{{route('food')}}">Back to foodfeed</a>
            </div>
        </header>
        <form method="POST" action="{{route('food.update',$data->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$data->title}}" />

                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{$data->description}}" />

                <label for="image">Image url</label>
                <input type="text" name="image" id="image" class="form-control" value="{{$data->image}}" />
            </div>
            <div class="form-group" style="padding-bottom: 15px">
                <button type="submit" class="btn-primary btn-block">Update Food Post</button>
            </div>
        </form>
    @endcan
@endsection
