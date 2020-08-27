@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h1 class="text-center">All posts</h1>
            <div class="d-flex justify-content-center">
            <a type="button" href="{{route('category.create')}}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-pencil-square-o fa-2x"></i> Create post</a>
         </div></div>
        <div class="card-body p-5">
             {{-- start of row --}}
             @foreach ($category as $item)
             <div class="row">
                <div class="col-md-12">
                    <img style=" width:100%;" src="{{ asset($item->photo) }} "alt="profile">
                </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                <h6>{{$item->caption}}</h6>
                    <div class="d-flex justify-content-between">
                        <div class="pr-5"><strong>{{$item->updated_at}}</strong></div>
                        <div class="pr-5"><strong>{{ Auth::user()->name }} </strong></div>
                     </div>
                    <h1 class="text-center">{{$item->title}}</h1>
                    <p>{{$item->body}}</p>                        
                    <div class="d-flex justify-content-between">
                        <div class="pr-5"><strong>likes</strong></div>
                    <div class="pr-5"><a href="{{route('post.index')}}"><strong>View profile</strong></a></div>
                     </div>
                </div>
           
            </div> {{-- end of row --}}
            <hr>
            @endforeach
        </div>
        
       
    </div>
</div>
@endsection
