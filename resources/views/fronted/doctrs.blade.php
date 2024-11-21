@extends('fronted.layouts.template')
@section('home-content')
<!-- Doctors -->
<div class="container">
     <div class="row ">
          <div class="wrapper ">
          @foreach ($doctors as $doctor)
               <div class="doc-card card">
                    <a href="{{route('doctorDtails', [$doctor->id, $doctor->slug])}}">
                         <div class="profile">
                              <img src="{{$doctor->img}}" alt="">
                         </div>
                         <h4 class="mt-4 mb-3">{{$doctor->doctor_name}}</h4>
                         <div class="card-content">
                              <h6>{{$doctor->degrees}}</h6>
                              <p>{{$doctor->designation}}</p>
                         </div>
                    </a>
               </div>
               @endforeach
          </div>
          <!-- <div class="btn my-5 all">View all</div> -->
     </div>
</div>
<!-- Doctors -->
@endsection