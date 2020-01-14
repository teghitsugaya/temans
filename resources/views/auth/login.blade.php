@extends('layouts.auth') @section('title', 'Login User') @section('content')

<div class="d-flex align-items-center position-relative height-lg-100vh">
   <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center gradient-half-primary-v1 height-lg-100vh px-0">
     <div class="w-100 p-5">
       <!-- SVG Quote -->
       <figure class="text-center mb-5 mx-auto">
         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
            viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
           <path class="fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
             C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
             c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
             C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
         </svg>
       </figure>
       <!-- End SVG Quote -->

       <!-- Testimonials Carousel Main -->
       <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
            data-infinite="true"
            data-autoplay="true"
            data-speed="5000"
            data-fade="true"
            data-nav-for="#testimonialsNavPagination">
         <div class="js-slide">
           <!-- Testimonials -->
           <div class="w-md-80 w-lg-60 text-center mx-auto">
             <blockquote class="h5 text-white font-weight-normal mb-4">The template is really nice and offers quite a large set of options. Thank you!</blockquote>
             <h1 class="h6 text-white-70">Maria Muszynska, Google</h1>
           </div>
           <!-- End Testimonials -->
         </div>

         <div class="js-slide">
           <!-- Testimonials -->
           <div class="w-md-80 w-lg-60 text-center mx-auto">
             <blockquote class="h5 text-white font-weight-normal mb-4">It's beautiful and the coding is done quickly and seamlessly. Keep it up!</blockquote>
             <h2 class="h6 text-white-70">James Austin, Slack</h2>
           </div>
           <!-- End Testimonials -->
         </div>

         <div class="js-slide">
           <!-- Testimonials -->
           <div class="w-md-80 w-lg-60 text-center mx-auto">
             <blockquote class="h5 text-white font-weight-normal mb-4">I love Front! I love the ease of use, I love the fact that I have total creative freedom...</blockquote>
             <h3 class="h6 text-white-70">Charlotte Moore, Amazon</h3>
           </div>
           <!-- End Testimonials -->
         </div>
       </div>
       <!-- End Testimonials Carousel Main -->

       <!-- Testimonials Carousel Pagination -->
       <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern mx-auto"
            data-infinite="true"
            data-autoplay="true"
            data-speed="5000"
            data-center-mode="true"
            data-slides-show="3"
            data-is-thumbs="true"
            data-focus-on-select="true"
            data-nav-for="#testimonialsNavMain">
         <div class="js-slide">
           <div class="u-avatar mx-auto">
             <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img1.jpg') }}" alt="Image Description">
           </div>
         </div>

         <div class="js-slide">
           <div class="u-avatar mx-auto">
             <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img3.jpg') }}" alt="Image Description">
           </div>
         </div>

         <div class="js-slide">
           <div class="u-avatar mx-auto">
             <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img2.jpg') }}" alt="Image Description">
           </div>
         </div>
       </div>
       <!-- End Testimonials Carousel Pagination -->

       <!-- Clients -->
       <div class="position-absolute right-0 bottom-0 left-0 text-center p-5">
         <h4 class="h6 text-white-70 mb-3">Front partners</h4>
         <div class="d-flex justify-content-center">
           <div class="mx-4">
             <img class="u-clients" src="{{ asset('assets/svg/clients-logo/slack-white.svg') }}" alt="Image Description">
           </div>
           <div class="mx-4">
             <img class="u-clients" src="{{ asset('assets/svg/clients-logo/google-white.svg') }}" alt="Image Description">
           </div>
           <div class="mx-4">
             <img class="u-clients" src="{{ asset('assets/svg/clients-logo/spotify-white.svg') }}" alt="Image Description">
           </div>
         </div>
       </div>
       <!-- End Clients -->
     </div>
   </div>

   <div class="container">
     <div class="row no-gutters">
       <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-3 space-lg-0">
         <!-- Form -->
         <form method="POST" action="{{ route('login') }}" class="js-validate mt-5">
            @csrf
            {{ csrf_field() }}
           <!-- Title -->
           <div class="mb-7">
             <h2 class="h3 text-primary font-weight-normal mb-0">Welcome <span class="font-weight-semi-bold">back</span></h2>
             <p>Login to manage your account.</p>
           </div>
           <!-- End Title -->

           <!-- Form Group -->
           <div class="js-form-message form-group">
             <label class="form-label" for="signinSrEmail">Email address</label>
             <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required
                    data-msg="Please enter a valid email address."
                    data-error-class="u-has-error"
                    data-success-class="u-has-success" value="{{ old('email') }}">
           </div>
           <!-- End Form Group -->

           <!-- Form Group -->
           <div class="js-form-message form-group">
             <label class="form-label" for="signinSrPassword">
               <span class="d-flex justify-content-between align-items-center">
                 Password
                 <a class="link-muted text-capitalize font-weight-normal" href="#">Forgot Password?</a>
               </span>
             </label>
             <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                    data-msg="Your password is invalid. Please try again."
                    data-error-class="u-has-error"
                    data-success-class="u-has-success">
           </div>
           <!-- End Form Group -->

           <!-- Button -->
           <div class="row align-items-center mb-5">
             <div class="col-6">
               <span class="small text-muted">Don't have an account?</span>
               <a class="small" href="signup.html">Signup</a>
             </div>

             <div class="col-6 text-right">
               <button type="submit" class="btn btn-primary transition-3d-hover">Get Started</button>
             </div>
           </div>
           <!-- End Button -->
         </form>
         <!-- End Form -->
       </div>
     </div>
   </div>
 </div>

@endsection