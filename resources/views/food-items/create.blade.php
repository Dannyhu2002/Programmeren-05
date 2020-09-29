@extends ('layouts.app')

@section ('content')

    <header class="jumbotron">
        <h2 class="head">Add a new foodporn</h2>
        <div id="link-container">
            <a href="{{route('home')}}">Back to foodfeed</a>
        </div>
    </header>

    <div class="container">
        <form method="post" action="{{route('food.store')}}">
            @csrf
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category">
                    @foreach ($categories as $category)
                        <option value = "{{$category['id']}}">{{$category['title']}}</option>
                    @endforeach
                    @if ($errors->has('category'))
                        <span class="alert-danger form-check-inline">{{$errors->first ('category')}}</span>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title"/>
                @if ($errors->has ('title'))
                    <span class="alert-danger form-check-inline">{{$errors->first('title')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input style="height: 100px;" type="text" class="form-control" id="description" name="description"/>
                @if ($errors->has('description'))
                    <span class="alert-danger form-check-inline">{{$errors->first('description')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Image url:</label>
                <input type="text" class="form-control" id="image" name="image"/>
                @if ($errors->has('image'))
                    <span class="alert-danger form-check-inline">{{$errors->first('image')}}</span>
                @endif
            </div>

            </br>
            <button type="submit" class="btn-primary btn-block">Save food picture</button>


        </form>
    </div>
@endsection
