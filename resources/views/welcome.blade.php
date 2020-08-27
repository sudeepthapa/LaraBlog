@extends('layouts.app')
@section('content')
    <div class="container m-5 p-5">
        <div class="card">
            <div class="card-body">
                {{-- start of row --}}
                <div class="row">
                    <div class="col-md-4">
                        <img style="height:200px; width:200px;" src="https://cdn.akc.org/content/article-body-image/lab_puppy_dog_pictures.jpg" alt="profile">
                    </div>
                    <div class="col-md-8">
                        <h1 class="text-center">Lorem serum</h1>
                        <p>Lorem ipsum dolor sit amet, sed a malesuada. Turpis velit adipiscing leo, per proin suspendisse tortor elit tincidunt, ipsum tincidunt non, scelerisque quam purus quam mi porttitor vitae. Libero ante turpis, sit justo et, lacus odio viverra nibh in. Fugiat rutrum, tellus congue, erat porro lobortis sapien penatibus sagittis vestibulum, congue est, lectus quam erat mauris est senectus. Tincidunt quisque libero elit ligula, ligula in quis nulla wisi nulla urna.</p>                        
                        <div class="d-flex justify-content-between">
                            <div class="pr-5"><strong>Date</strong></div>
                            <div class="pr-5"><strong>Author</strong></div>
                         </div>
                    </div>
               
                </div> {{-- end of row --}}
            </div> {{-- end of body  --}}
        </div> {{-- end of card  --}}

        {{-- 2nd post --}}
        <div class="card">
            <div class="card-body">
                {{-- start of row --}}
                <div class="row">
                    <div class="col-md-4">
                        <img style="height:200px; width:200px;" src="https://cdn.akc.org/content/article-body-image/lab_puppy_dog_pictures.jpg" alt="profile">
                    </div>
                    <div class="col-md-8">
                        <h1 class="text-center">Lorem serum</h1>
                        <p>Lorem ipsum dolor sit amet, sed a malesuada. Turpis velit adipiscing leo, per proin suspendisse tortor elit tincidunt, ipsum tincidunt non, scelerisque quam purus quam mi porttitor vitae. Libero ante turpis, sit justo et, lacus odio viverra nibh in. Fugiat rutrum, tellus congue, erat porro lobortis sapien penatibus sagittis vestibulum, congue est, lectus quam erat mauris est senectus. Tincidunt quisque libero elit ligula, ligula in quis nulla wisi nulla urna.</p>                        
                        <div class="d-flex justify-content-between">
                            <div class="pr-5"><strong>Date</strong></div>
                            <div class="pr-5"><strong>Author</strong></div>
                         </div>
                    </div>
               
                </div> {{-- end of row --}}
            </div> {{-- end of body  --}}
        </div> {{-- end of card  --}}
    </div>
{{-- @foreach ($post as $item)
     --}}
{{-- {{$item->title}}
{{$item->photo}} 
{{$item->body}}
{{$item->caption}} --}}
{{-- @endforeach --}}
@endsection