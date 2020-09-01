@extends('layouts.app')

@section('content')

<div class="container">



    <div class="card mt-5">
        <div class="card-header">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div><img style="height: 200px; width:200px; border-radius:50%;" src="{{ asset(Auth::user()->avatar)?asset(Auth::user()->avatar): 'https://www.pngitem.com/pimgs/m/11-118241_cute-anime-vampire-girl-cute-vampire-anime-girl.png' }}" alt="profile"></div>
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
            @if (count($posts))
                @foreach ($posts as $item)  
                    <div class="card m-2">
                        <div class="card-body">
                            {{-- start of row --}}
                            <div class="row">
                                <div class="col-md-3">
                                <img style="height:150px; width:150px;" src="{{asset($item->photo)}}" alt="profile">
                                </div>
                                <div class="col-md-9">
                                    <h1>{{$item->title}}</h1>
                                    <p>{{$item->body}}</p>                        
                                    {{-- <div class="d-flex justify-content-between">
                                        <div class="pr-5"><strong>Date</strong></div>
                                        <div class="pr-5"><strong>Author</strong></div>
                                    </div> --}}
                                </div>
                        
                            </div> {{-- end of row --}}
                        </div> {{-- end of body  --}}
                    </div>
                @endforeach

            @else
                <div class="alert alert-info">No Posts Found</div>    
            @endif

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
