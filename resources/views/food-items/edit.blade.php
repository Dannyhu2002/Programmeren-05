@extends ('layouts.master')

@section ('content')

    @can('edit_foodItems')

        <header class="jumbotron">
            <h2 class="head">Edit Food Post</h2>
            <div id="link-container">
                <a href="{{route('food')}}">Back to foodfeed</a>
            </div>
        </header>


        <form method="POST" action="{{route('food.update',$data->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">

                <label for="category">Category</label>
                </br>
                <select name="category_id">
                    <option value="all">All</option>
                    @foreach($categoriesMenu as $category)
                        <option value="{{$category->id}} "{{$category->id == $data->category_id ? 'selected' : ''}}>{{$category['title']}}</option>
                    @endforeach
                </select>

                </br>


                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$data->title}}" />

                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{$data->description}}" />

                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" value="{{$data->image}}" />
            </div>
            <div class="form-group">
                </br>
                <button type="submit" class="btn-primary btn-block" style="font-size: 30px;">Update Food Post</button>
            </div>
        </form>
    @endcan
@endsection
