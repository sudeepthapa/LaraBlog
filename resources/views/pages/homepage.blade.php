@extends('layouts.app')
@section('content')
    <div>
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
{{-- @foreach ($post as $item)
     --}}
{{-- {{$item->title}}
{{$item->photo}} 
{{$item->body}}
{{$item->caption}} --}}
{{-- @endforeach --}}
@endsection