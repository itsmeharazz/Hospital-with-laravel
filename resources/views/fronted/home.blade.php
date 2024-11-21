@extends('fronted.layouts.template')
@section('home-content')

<!-- cover -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

     <div class="carousel-inner">

          <div class="carousel-item active">
               <img src="{{asset('fronted')}}/assets/image/cov-1.jpeg" class="d-block w-100" alt="cover image">
          </div>
          <div class="carousel-item">
               <img src="{{asset('fronted')}}/assets/image/cover-2.jpeg" class="d-block w-100" style=" height: 80vh;" alt="image">
          </div>
          <div class="carousel-item">
               <img src="{{asset('fronted')}}/assets/image/cover-3.jpeg" class="d-block w-100" style=" height: 80vh;" alt="cover">
          </div>
          <div class="carousel-item">
               <img src="{{asset('fronted')}}/assets/image/cover-4.jpeg" class="d-block w-100" alt="cover">
          </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
     </button>
</div>
<!-- cover -->
<!-- Deperment -->
<div class="container">
     <h2>Our Deparment</h2>
     <ul class="cards">
     @foreach ($allDeparment as $deparment)
          <li class="card">
               <div class="d-icon">
                    <img class="mx-auto" src="{{$deparment->img}}" alt="Diagonostic">
               </div>
               <h3 class="card-title my-3">{{$deparment->deparment_name}}</h3>
               <div class="card-content">
                    <p>{{$deparment->shot_des}}</p>
               </div>
               <div class="card-link-wrapper">
                    <a href="{{route('deparmentDetails', [$deparment->id, $deparment->slug])}}" class="card-link">Learn More</a>
               </div>
          </li>
          @endforeach
     </ul>
</div>
<!-- Deperment -->
<!-- Doctors -->
<div class="container">
     <div class="row ">
          <div class="wrapper ">
               @foreach ($allDoctors as $doctor)
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
<!-- Corporete Clients -->
<section class="clints">
     <div class="container">
          <h2>Corporate Clients </h2>
          <div class="clint">
               <div class="clint-row d-flex">
                    <img src="{{asset('fronted')}}/assets/image/airtel.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/atn.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/basundhara.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/eastern.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/fsecurityislamibank.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/gp.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/grameenbank.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/progoti.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/shine.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/vision.jpg" alt="">
                    <img src="{{asset('fronted')}}/assets/image/trust.jpg" alt="">
               </div>
          </div>
     </div>
</section>
<!-- Corporete Clients -->
@endsection