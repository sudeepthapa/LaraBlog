@extends('layouts.app')

@section('link')
<li class="nav-item">
<a class="nav-link" href="{{route('category.index')}}">Home</a>
</li>   
@endsection
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div><img style="height: 200px; width:200px; border-radius:50%;" src="https://www.pngitem.com/pimgs/m/11-118241_cute-anime-vampire-girl-cute-vampire-anime-girl.png" alt="profile"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div><h1>{{ Auth::user()->name }}</h1></div>
                </div>
            </div>
        </div>

        {{-- address  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div><h1>{{ Auth::user()->address }} | {{ Auth::user()->contact}}</h1></div>
                </div>
            </div>
        </div>
            {{-- bio  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div><h5>{{ Auth::user()->bio }}</h5></div>
                </div>
            </div>
        </div>
        {{-- interest --}}
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div><h5>{{ Auth::user()->interest }}</h5></div>
                </div>
            </div>
        </div>
    </div>
        <hr>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <a type="button" href="{{route('post.create')}}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-pencil-square-o fa-2x"></i> Create post</a>
                    </div>
                </div>
            </div>

            @foreach ($post as $item)
            <div class="row mt-5">
                <div class="col-md-4">
                    
                    <img style="height:200px; width:200px;" src="{{ asset($item->photo) }}" alt="profile">
                </div>
                <div class="col-md-8">
                <h1 class="text-center" style="text-transform: uppercase;">{{$item->title}}<a href="{{route('post.edit', $item->id)}}"><i class="fa fa-pencil-square-o ml-5"></i></a></h1>
                    <p style="text-tranfer:capitalized;">{{$item->body}}</p>                        
                    <div class="d-flex justify-content-between">
                        <div class="pr-5"><strong>{{$item->updated_at}}</strong></div>
                    <div class="pr-5"><strong>{{Auth::user()->name }}</strong></div>
                     </div>
                     
                </div>
            </div> {{-- end of row --}}
            @endforeach

        </div>
    </div>
</div>


{{-- 
{{$item->title}}
{{$item->photo}} 
{{$item->body}}
{{$item->caption}}
@endforeach --}}
@endsection
