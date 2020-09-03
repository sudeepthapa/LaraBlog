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
                    <h1 class="mb-0 pb-0">{{$post->title}}</h1>
                    <p class='mt-0 pt-0 muted'>
                        @foreach ($post->categories as $category)
                            <a href=" {{ route('category.products', $category->id) }} " class="badge badge-primary">{{$category->title}}</a>
                            {{-- @if (!$loop->last)
                                |
                            @endif --}}
                        @endforeach
                    </p>
                    <hr>
                    <p>{{$post->body}}</p>
                    <div class="d-flex justify-content-between">
                        <div class="pr-5"><strong>
                                {{ Carbon\Carbon::parse($post->created_at)->toDayDateTimeString()}}</strong></div>
                        <div class="pr-5"> <a href="{{ route('author.profile', $post->user->id) }}"><strong>
                                    {{ $post->user->name }} </strong></a> </div>
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