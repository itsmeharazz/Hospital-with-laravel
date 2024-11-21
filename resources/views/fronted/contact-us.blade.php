@extends('fronted.layouts.template')
@section('home-content')
<section class="contact py-5">
          <div class="container">
               <div class="d-lg-flex d-md-flex d-sm-block justify-content-between align-items-center">
                    <div class="d-flex  align-items-center">
                         <img src="{{asset('fronted')}}/assets/image/email.png" alt="icon">
                         <div class="any ms-4">
                              <p class="mb-1">Have any questions?</p>
                              <a href="#">info@abchospital.com</a>
                         </div>
                    </div>
                    <div class="d-flex  align-items-center">
                         <img src="{{asset('fronted')}}/assets/image/call-1.png" alt="icon">
                         <div class="any ms-4">
                              <p class="mb-1">Call us</p>
                              <a href="tel:01234-56789">01234-56789</a>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- contact from -->
     <section class="docdtails contact-from py-5">
          <div class="container">
               <div class="d-lg-flex d-md-flex d-sm-block">
                    <div class="sms">
                         <h4>Write a message</h4>
                         <p>
                              If you got any questions, please do not hesitate to send us a message. We reply within
                              <span>24 hours !</span>
                         </p>
                    </div>
                    <form action="" method="post">
                              <input type="text" name="name" placeholder="Your name (required)">
                              <input type="email" name="email" placeholder="Your email (required)">
                              <input type="text" name="subjict" placeholder="subjict (required)">
                              <textarea name="sms" id="" placeholder="Your Message"></textarea>
                              <button class="btn" type="submit">Send</button>
                    </form>
               </div>

          </div>

     </section>

@endsection