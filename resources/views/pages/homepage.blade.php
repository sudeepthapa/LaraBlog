@extends('layouts.app')
@section('content')
    <div>
        @if (count($posts))
                @foreach ($posts as $post)  
                    <div class="card m-2">
                        <div class="card-body">
                            {{-- start of row --}}
                            <div class="row">
                                <div class="col-md-3">
                                <img style="height:150px; width:150px;" src="{{asset($post->photo)}}" alt="profile">
                                </div>
                                <div class="col-md-9">
                                    <h1>{{$post->title}}</h1>
                                    <p>{{$post->body}}</p>                        
                                    <div class="d-flex justify-content-between">
                                        <div class="pr-5"><strong>{{ $post->category->title }} || {{ Carbon\Carbon::parse($post->created_at)->toDayDateTimeString()}}</strong></div>
                                        <div class="pr-5"><strong> {{ $post->user->name }} </strong></div>
                                    </div>
                                </div>
                        
                            </div> {{-- end of row --}}
                        </div> {{-- end of body  --}}
                    </div>
                @endforeach

            @else
                <div class="alert alert-info">No Posts Found</div>    
            @endif
    </div>
{{-- @foreach ($post as $post)
     --}}
{{-- {{$post->title}}
{{$post->photo}} 
{{$post->body}}
{{$post->caption}} --}}
{{-- @endforeach --}}
@endsection