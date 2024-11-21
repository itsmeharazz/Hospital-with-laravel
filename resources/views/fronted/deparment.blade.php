@extends('fronted.layouts.template')
@section('home-content')
<div class="row">
     @foreach ($deparments as $deparment)
     <div class="col-md-4">
          <a href="{{route('deparmentDetails', [$deparment->id, $deparment->slug])}}" class="text-decoration-none text-dark">
               <div class="deparment-card ">
                    <img  src="{{$deparment->img}}"  alt="Title" />
                    <div class="card-body">
                         <h4 class="card-title mb-3">{{$deparment->deparment_name}}</h4>
                         <p class="card-text">{{$deparment->shot_des}}</p>
                    </div>
               </div>
          </a>
     </div>
     @endforeach
</div>
@endsection