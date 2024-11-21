@extends('fronted.layouts.template')
@section('home-content')
<!-- Shot Details -->
@if (session()->has('message'))
        <div class="alert alert-success"> {{ session()->get('message') }} </div>
    @endif
<div class="shot-datails my-5">
     <div class="container">

          <div class="d-lg-flex d-md-flex d-sm-block justify-content-between align-items-center">
               <div class="appoin-dtails d-flex justify-content-between align-items-center p-3">
                    <img src="./assets/image/tanbir mohid.png" alt="image">
                    <div class="line me-5">
                         <h4>Tanvir mohid</h4>
                         <p>Medichin spacalist</p>
                    </div>
                    <div class="fee me-5">
                         <h5>Fee</h5>
                         <p>950 tk</p>
                    </div>
                    <i class="fa-solid fa-trash-can"></i>
               </div>
               <div class="total appoin-dtails  mt-4 p-3">
                    <div class="fee d-flex justify-content-between align-items-center ">
                         <h6>Total Fee</h6>
                         <p>950</p>
                    </div>
                    <div class="fee d-flex justify-content-between align-items-center">
                         <h6>vat</h6>
                         <p>0.00</p>
                    </div>
                    <div class="fee d-flex justify-content-between align-items-center">
                         <h6>Grant Total</h6>
                         <p>950</p>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- contact from -->
<section class="docdtails contact-from py-5">
     <div class="container">
          <div class="d-lg-flex d-md-flex d-sm-block">
               <form action="{{route('appointment')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Your name (required)">
                    <input type="number" name="age" placeholder="Your age (required)">
                    <input type="email" name="email" placeholder="Your email (required)">
                    <input type="number" name="number" placeholder="Mobile Number (required)">
                    <input type="text" name="address" placeholder="Address  (required)">
                    <button class="btn" type="submit">Confrom </button>
               </form>
          </div>

     </div>

</section>


@endsection