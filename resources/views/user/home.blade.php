 <?php
   // Get the current date
  $currentDate = date('Y-m-d');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Dr Facelook</title>


  <link rel="stylesheet" href="../assets/css/home_style.css">
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">



  <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Toastify -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


<!-- Include CSRF token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>



  <!-- Back to top button -->
  <div class="back-to-top"></div>


  <header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/home"><span class="text-primary">Dr</span> Facelook</a>

        <form action="#">
          <div class="input-group input-navbar highlight-on-hover">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupport">



<li></li>
          <ul class="navbar-nav ml-auto">



@if(Route::has('login'))

@auth
<li class="nav-item active">
              <a class="nav-link highlight-on-hover" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="{{route('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="{{route('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="contact.html">Contact</a>
            </li>


            <li class="nav-item">
               <a class="nav-link">
                     @if (Auth::check())
                       <img src="https://cdn-icons-png.flaticon.com/512/3972/3972726.png" height="45px" width="45px">  {{Auth::user()->name}}&nbsp;&nbsp;
               </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" > <form action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                @csrf
                <button style="background-color:#00D9A5; color:white; border-radius:10px;" class="btn btn highlight-on-hover" type="submit">Logout</button>
            </form> </a>
            </li>



@endif

@else

            {{-- <div class="navbar-nav">
    <ul class="navbar-nav">
        <li class="nav-item mt-2">
            <a class="btn btn-primary ml-lg-3 highlight-on-hover" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item mt-2">
            <a class="btn btn-primary ml-lg-3 highlight-on-hover" href="{{ route('register') }}">Register</a>
        </li>
    </ul>
</div> --}}

<li class="nav-item">
    <a class="nav-link" > <form action="{{ route('login') }}" style="display: inline-block;">
      @csrf
      <button style="background-color:#00D9A5; color:white; border-radius:10px;" class="btn btn highlight-on-hover" type="submit">Login</button>
  </form> </a>
  </li>



  <li class="nav-item">
    <a class="nav-link" > <form action="{{ route('register') }}" style="display: inline-block;">
      @csrf
      <button style="background-color:#00D9A5; color:white; border-radius:10px;" class="btn btn highlight-on-hover" type="submit">Register</button>
  </form> </a>
  </li>




    @endauth
    @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#consult-section" class="btn btn-primary highlight-on-hover">Let's Consult</a>
      </div>
    </div>
  </div>




  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
          <a href="/chatify"> <div style="color:black;" class="card-service wow fadeInUp highlight-on-hover">
            <div class="circle-shape bg-secondary text-white" >
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> Room</p>
            </div>
          </a>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp highlight-on-hover" >
                <div class="circle-shape bg-primary text-white">
                    <span class="mai-shield-checkmark"></span>
                </div>
                <p><span>Dr</span>-Facelook AI Protection</p>
            </div>
        </div>






          <div class="col-md-4 py-3 py-md-0 ">
            <div class="card-service wow fadeInUp highlight-on-hover">
              <div class="circle-shape bg-accent text-white ">
                <span class="mai-basket"></span>
              </div>
              <p><span>Dr</span>-Facelook Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Welcome to Dr Facelook – Your One-Stop Health Companion! 🌟 Experience hassle-free appointment management with our web-based application. Connect with specialized doctors through chat or video calls for personalized consultations. After your consultation, conveniently purchase prescribed medicines directly from our platform. Your health, our priority – Dr Facelook, where care meets convenience! 💻👩‍⚕️💊 #HealthcareMadeEasy #DrFacelook #VirtualHealthcare</p>
            
            <!-- <a href="about.html" id="" class="btn btn-primary row container d-flex justify-content-center">Book Your First Free Appoientment </a> -->





            
<div class="page-content page-container" id="page-content">
    <div class="padding">
      <a href="#consult-section"> <div class=""> <button type="button" id="animatebutton" class="btn btn-primary highlight-on-hover animatebutton"> <i class="fa fa-check btn-icon-prepend"></i>Book Your First Free Appoientment </button> </div></a>
    </div>
</div>

 
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


<?php
use App\Models\User;

$users = User::select('*')
                ->join('doctors', 'users.id', '=', 'doctors.user_id')
                ->select('users.*', 'doctors.specialization','doctors.user_id', 'doctors.qualification', 'doctors.experience')
                ->get()->toArray();

// echo"<pre>";print_r($users);die();

?>


  <div class="page-section">
    <div class="container">
       <center><img src="https://i.pinimg.com/originals/37/1f/14/371f14644d93578b5b58df355a57024f.gif" height="25%" width="25%"></center>
      <h1 class="text-center mb-4 wow fadeInUp">Our Doctors</h1>




      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($users as $user)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{$user['profile_photo_url']}}" class="profile_photo_url" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="/chatify/{{$user['user_id']}}"><span class="mai-chatbubbles-outline"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-1">{{$user['name']}}</p>

              <span style="display: flex; align-items: center;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP147-W6enixCvFEGGy7R_m5nta86B8Y0oS4w8kHwqlRRk9xUYG-2x26YvFACR2K-3LaI&usqp=CAU" alt="Image" style="max-width: 14%; height: auto; border-radius: 8px; margin-right: 5px;">
                <span class="text-sm text-grey">{{$user['specialization']}}</span>
              </span>

              <span style="display: flex; align-items: center;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRLuRKOdtlptoZOvcfYoFP-RZWCn0er2WN2g&usqp=CAU" alt="Image" style="max-width: 14%; height: auto; border-radius: 8px; margin-right: 5px;">
                <span class="text-sm text-grey">{{$user['qualification']}}</span>
              </span>


              {{-- <img src="https://www.freeiconspng.com/uploads/5-star-icon-14.jpeg" alt="" style="max-width: 28%; height: auto; border-radius: 8px;; margin-right: 5px;"> --}}




               {{-- <img height="3x" width="4px" src="https://static.vecteezy.com/system/resources/previews/022/369/428/non_2x/double-degree-icon-style-vector.jpg"> --}}
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_2.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_3.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_2.jpg" alt="">
                  </div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->


<!-- ===============================  Make An appointment =========================== -->

@if(Route::has('login'))

@auth

<div class="page-section" id="consult-section">
    <div class="container">

      <center> <img src="https://cdn.dribbble.com/users/2517905/screenshots/8140964/media/7d5e2f8977c3fa786a8de673abca6084.gif" height="36%" width="36%"> </center>
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>


      <form class="main-form">
        <div class="row mt-5 ">

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control highlight-on-hover" id="name" placeholder="Full name *" value="{{Auth::User()->name}}" >
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" id="email" class="form-control highlight-on-hover" placeholder="Email address *" value="{{Auth::user()->email}}">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control highlight-on-hover" id="myDateInput" value="<?php echo $currentDate; ?>" placeholder="Date *">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight " data-wow-delay="300ms">
            <select  id="checkup_type" class="custom-select highlight-on-hover" aria-placeholder="Departement *">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>


          <div class="col-12 py-2 wow fadeInRight " data-wow-delay="300ms">
            <select  id="doctor_id" class="custom-select highlight-on-hover" aria-placeholder="Departement *">

              @foreach($users as $user)
              <option value="{{$user['id']}}">{{$user['name']}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" id="number" class="form-control highlight-on-hover" placeholder="Number *">
          </div>

          <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">



          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control highlight-on-hover" rows="6" placeholder="Enter message "></textarea>
          </div>

        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn highlight-on-hover">Submit Request</button>
      </form>
    </div>
  </div>


            @if (Auth::check())




@endif

@else

      <div class="page-section" id="consult-section">
    <div class="container">
        <center> <img src="https://cdn.dribbble.com/users/2517905/screenshots/8140964/media/7d5e2f8977c3fa786a8de673abca6084.gif" height="36%" width="36%"> </center>
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>


      <form class="main-form">
        <div class="row mt-5 ">

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control highlight-on-hover" id="name" placeholder="Full name *" value="" >
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" id="email" class="form-control highlight-on-hover" placeholder="Email address *" value="">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control highlight-on-hover" id="myDateInput" value="" placeholder="Date *">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="checkup_type" id="checkup_type" class="custom-select highlight-on-hover">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>

           <div class="col-12 py-2 wow fadeInRight " data-wow-delay="300ms">
            <select name="doctor_id" id="doctor_id" class="custom-select highlight-on-hover" aria-placeholder="Departement *">

              @foreach($users as $user)
              <option value="{{$user['id']}}">{{$user['name']}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" id="number" class="form-control highlight-on-hover" placeholder="Number *">
          </div>


          <input type="hidden" name="user_id" id="user_id" value="">



          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control highlight-on-hover" rows="6" placeholder="Enter message"></textarea>
          </div>

        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn highlight-on-hover">Submit Request</button>
      </form>
    </div>
  </div>

    @endauth
    @endif


   <!-- .page-section -->

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using Dr Facelook Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  {{-- <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="DrFacelook.com" target="_blank">Dr. Facelook</a>. All right reserved</p>
    </div>
  </footer> --}}






  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

{{-- ====================================================== Get Current location and show toast ===================================================== --}}

@if(Route::has('login'))

@auth

<script>

    // Variable to store the current location
    let currentLocation = null;

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
        showToast("Geolocation is not supported by this browser.");
      }
    }

    function showPosition(position) {
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;

      if (!currentLocation) {
        // Page is reloading, show initial toast
        showInitialToast(latitude, longitude);
      } else if (currentLocation.latitude !== latitude || currentLocation.longitude !== longitude) {
        // Location has changed, show update toast
        showUpdateToast(latitude, longitude);
      }

      // Update the current location
      currentLocation = { latitude, longitude };
    }

    function showError(error) {
      let errorMessage = "";
      switch (error.code) {
        case error.PERMISSION_DENIED:
          errorMessage = "User denied the request for Geolocation.";
          break;
        case error.POSITION_UNAVAILABLE:
          errorMessage = "Location information is unavailable.";
          break;
        case error.TIMEOUT:
          errorMessage = "The request to get user location timed out.";
          break;
        case error.UNKNOWN_ERROR:
          errorMessage = "An unknown error occurred.";
          break;
      }
      showToast(errorMessage);
    }

    function showInitialToast(latitude, longitude) {
      showToast(`Welcome! You are live in:.${latitude}, ${longitude}`);
    }

    function showUpdateToast(latitude, longitude) {
      showToast(`Location Updated! Your new location is:<br>${latitude}, ${longitude}`);
    }

    function showToast(message) {
  Toastify({
    text: message,
    duration: 3500, // Reduced to 3.5 seconds
    close: true,
    gravity: "top",
    position: "right",
    backgroundColor: "linear-gradient(to right, rgba(0, 217, 165, 0.9), rgba(255, 61, 133, 0.9))", // Added transparency
    stopOnFocus: true,
    className: "toastify",
    progress: true,
  }).showToast();
}

    // Check login status and get location only when the page reloads
    getLocation();
  </script>

@endif

@else




@endauth


{{-- ====================================================== Get Current location and show toast End ===================================================== --}}

<script>

  $(document).ready(function() {
    $('.main-form').submit(function(e) {
      e.preventDefault();

       var isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

      if (isLoggedIn == false) {
            
            Toastify({
          text: 'Please Login for Make an appointment',
          duration: 3000,
          close: true,
          gravity: 'top',
          position: 'center',
          backgroundColor: 'linear-gradient(to right, rgba(0, 217, 165, 0.9), rgba(255, 61, 133, 0.9))', // Tomato color for error
          stopOnFocus: true
        }).showToast();

      }
      else
      {

           // Get form data based on element IDs
      var formData = {
        user_id:$('#user_id').val(),
        doctor_id:$('#doctor_id').val(),
        name: $('#name').val(),
        email: $('#email').val(),
        date: $('#myDateInput').val(),
        checkup_type: $('#checkup_type').val(),
        number: $('#number').val(),
        message: $('#message').val(),
        _token: $('meta[name="csrf-token"]').attr('content')
      };

      // Client-side validation
      if (!formData.name || !formData.email || !formData.date || !formData.checkup_type || !formData.number) {
        // Show an error toast
        Toastify({
          text: 'Validation failed: Please fill * required fields.',
          duration: 3000,
          close: true,
          gravity: 'top',
          position: 'center',
          backgroundColor: 'linear-gradient(to right, rgba(0, 217, 165, 0.9), rgba(255, 61, 133, 0.9))', // Tomato color for error
          stopOnFocus: true
        }).showToast();
        return;
      }

      // Make Ajax request to the Laravel route
      $.ajax({
        type: 'POST',
        url: '/submit-appointment',
        data: formData,
        success: function(response) {
          // Show a success toast
          Toastify({
            text: response.message,
            duration: 3000,
            close: true,
            gravity: 'top',
            position: 'center',
            backgroundColor: '#4CAF50', // Green color for success
            stopOnFocus: true
          }).showToast();

          // Optionally, reset the form
          $('.main-form')[0].reset();
        },
        error: function(error) {
          // Show an error toast for the Ajax request
          Toastify({
            text: 'Error submitting appointment. Please try again later.',
            duration: 3000,
            close: true,
            gravity: 'top',
            position: 'center',
            backgroundColor: 'linear-gradient(to right, rgba(0, 217, 165, 0.9), rgba(255, 61, 133, 0.9))', // Tomato color for error
            stopOnFocus: true
          }).showToast();
        }
      });


      }



    });
  });
</script>


<script>
  $( document ).ready(function() {
    // Bounce button
    $("#animatebutton").click(function(){
        const element =  document.querySelector('.animatebutton');
        element.classList.add('animated', 'rubberBand');
        setTimeout(function() {
          element.classList.remove('rubberBand'); 
  },        2000); 
    });
    
    
});
</script>



</body>
</html>
