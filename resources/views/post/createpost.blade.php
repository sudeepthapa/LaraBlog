@extends('layouts.app')
@section('link')
<li class="nav-item">
<a class="nav-link" href="{{route('category.index')}}">Home</a>
</li>   
@endsection
@section('content')
 <div class="container mt-5 ">
    <div class="card p-5">
        <div><h3 class="text-center">Create Blog</h3></div>
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="title">Title:</label>
            <input type="title" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter title" id="title">
                @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="body">Blog content:</label>
                <input type="text" name="body" class="form-control" value="{{old('body')}}" placeholder="Enter blog content" id="body">
                @error('body')
                <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="body">Category</label>

                <select name="category" class="form-control my-custom-select">
                    <option value="">--Select--</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->title }}</option>
                    @endforeach
                </select>
              </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" class="form-control" value="{{old('photo')}}" placeholder="Enter photo" id="photo">
                @error('photo')
                <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="caption">Caption:</label>
                <input type="text" name="caption" class="form-control" value="{{old('caption')}}" placeholder="Enter caption" id="caption">
                @error('caption')
                <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
        </div>
    </div> 
    <div class="d-flex justify-content-center">
    <button class="btn btn-outline-primary" type="submit">Post</button>
    </div>
        </form>
</div>    
</div>

@endsection