@extends('layouts.app')
@section('content')
 <div class="container mt-5 ">
    <div class="card p-5">
        <div><h3 class="text-center">Create Blog</h3></div>
        <form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="title">Title:</label>
            <input type="title" name="title" class="form-control" value="{{old('title')??$post->title }}" placeholder="Enter title" id="title">
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
                <input type="text" name="body" class="form-control" value="{{old('body')??$post->body }}" placeholder="Enter blog content" id="body">
                @error('body')
                <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" class="form-control" value="{{old('photo')??$post->photo }}" placeholder="Enter photo" id="photo">
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
                <input type="text" name="caption" class="form-control" value="{{old('caption')??$post->caption }}" placeholder="Enter caption" id="caption">
                @error('caption')
                <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
        </div>
    </div> 
    <div class="d-flex justify-content-center">
    <button class="btn btn-outline-primary" type="submit">Update</button>
    </div>
        </form>
</div>    
</div>   
@endsection