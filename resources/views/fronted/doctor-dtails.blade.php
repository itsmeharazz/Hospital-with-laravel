form@extends('fronted.layouts.template')
@section('home-content')
<!--doctor cover  -->
<section class="doc-cover">
     <div class="container">
          <div class="d-lg-flex d-md-flex d-sm-block justify-content-between align-items-center">
               <div class="left d-flex justify-content-between align-items-stard">
                    <div class="doc-socail">
                         <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                         <a href="#"><i class="fa-brands fa-whatsapp mt-3"></i></a>
                         <a href="#"><i class="fa-solid fa-at mt-3"></i></a>
                    </div>
                    <div class="doc-head sm-mt-5">
                         <h3 class="mb-4">{{$docID->deparment_name}}</h3>
                         <h2>{{$docID->doctor_name}}</h2>
                    </div>
               </div>
               <div class="right">
                    <img src="{{$docID->img}}" alt="Doctor Image">
               </div>
          </div>
     </div>
</section>
<!-- Dtails -->
<section class="docdtails py-5">
     <div class="container">
          <h3 class="mb-5">Specialization</h3>
          <div class="d-lg-flex d-md-flex d-sm-block justify-content-between align-items-center">
               <div class="degress">
                    <h6>Degress</h6>
                    <p>{{$docID->degrees}}
                    </p>
               </div>
               <div class="degress">
                    <h6>Designation</h6>
                    <p>{{$docID->designation}}</p>
               </div>
          </div>
          <hr>
          <div class="d-lg-flex d-md-flex d-sm-block justify-content-between align-items-center">
               <div class="degress">
                    <h6>Days</h6>
                    <p>{{$docID->time_to_patient}}</p>
               </div>
               <div class="time">
                    <h6>Room Number</h6>
                    <p>{{$docID->room_number}}</p>
               </div>
               <div class="time">
                    <h6>Location</h6>
                    <p>ABC hospital Sylhet-Sunamganj Road, Sylhet -3100</p>
               </div>
          </div>
          <hr>
          <h5> Appointment</h5>
          <div class="d-lg-flex d-md-flex d-sm-block justify-content-between align-items-center ">
               <div class="d-flex justify-content-between align-items-center appointment">
                    <form action="{{route('addAppointment')}}" method="POSt">
                    @csrf
                         <input type="hidden" name="doc_id" value="{{$docID->id}}">
                         <input type="hidden" name="doc_fee" value="{{$docID->doctor_fee}}">
                         <input type="submit" class="btn btn-outline-dark" value="Appointment">
                    </form>
               </div>
               <div class="contact">
                    <h6>Contact Number</h6>
                    <a class="phon" href="tel:{{$docID->contact_number}}"><i class="fa-solid fa-phone"></i> {{$docID->contact_number}}</a>
               </div>
               <div class="contact">
                    <h6>Fee</h6>
                    <p> <span> ৳</span>{{$docID->doctor_fee}}</p>
               </div>
          </div>
     </div>
</section>
@endsection