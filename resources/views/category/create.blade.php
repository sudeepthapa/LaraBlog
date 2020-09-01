@extends('layouts.app')
@section('link')
<li class="nav-item">
<a class="nav-link" href="{{route('category.index')}}">Home</a>
</li>   
@endsection
@section('content')
 <div class="container mt-5 ">
    <div class="card p-5">
        <div><h3 class="text-center">Create Category</h3></div>
        <form method="post" action="{{route('category.store')}}">
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
    
    <div class="d-flex justify-content-center">
    <button class="btn btn-outline-primary" type="submit">Submit</button>
    </div>
        </form>
</div>    
</div>   

@endsection