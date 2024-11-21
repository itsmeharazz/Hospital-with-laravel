<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ABC HOSPITEL</title>
     <!--======font-awesome link ====== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--======Boostrap link ====== -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!--======css link ====== -->
     <link rel="stylesheet" href="{{asset('fronted')}}/assets/css/carousel.css">
     <link rel="stylesheet" href="{{asset('fronted')}}/assets/css/style.css">
</head>

<body>
     <!-- Topbar -->
     <section class="topbar">
          <div class="top container d-flex justify-content-between align-items-center p-2">
               <p>Welcome to ABC Hospital</p>
               <div class="top-right">
                    <a class="phon" href="tel:01234-56789"><i class="fa-solid fa-phone"></i> 01234-56789</a>
                    <a class="phon" href="#"><i class="fa-solid fa-at"></i> abchospital@gmail.com</a>
               </div>
          </div>
     </section>
     <!-- Topbar -->

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
               <a class="navbar-brand logo" href="#"><img src="{{asset('fronted')}}/assets/image/logo.png" alt="logo"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('deparment')}}">Deparment</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('doctor')}}">Doctors</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contac Us</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="./about.html">About Us</a>
                         </li>
                    </ul>
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <!-- profile modal -->
                    <a href="#"><i class="fa-solid fa-user" data-bs-toggle="modal"
                              data-bs-target="#exampleModal"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Login your profile</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body">
                                        <input type="email" namr="email" placeholder="enter your email">
                                        <input type="password" namr="password" placeholder="enter your Password">
                                        <button type="button" class="login">Login</button>
                                        <a href="#">Forget password</a>
                                        <button type="button" class="login">Register</button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </nav>
     <!--navbar  -->