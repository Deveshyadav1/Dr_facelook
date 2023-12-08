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

  <meta name="Dr Facelook" content=" #HealthcareMadeEasy #DrFacelook #VirtualHealthcare">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Dr Facelook</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">


  <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Toastify -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!-- Include CSRF token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>

 /* Define a CSS class for a beautiful highlighting effect on hover */
.highlight-on-hover {
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.highlight-on-hover:hover {
    transform: scale(1.05); /* Enlarge the element on hover */
    box-shadow: 0 5px 15px #00D9A5; /* Add a subtle shadow */
    border-radius: 10px;
}

.highlight-on-hover::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(#00D9A5); /* Gradient overlay */
    opacity: 0;
    transition: opacity 0.6s ease-in-out;
    z-index: -1;
    border-radius: 50px;
}

.highlight-on-hover:hover::before {
    opacity: 1; /* Make the gradient overlay visible on hover */
}

</style>


<style>
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
        align-items: center;
    }

    .star {
        cursor: pointer;
        font-size: 2rem;
        color: #ddd;
        transition: color 0.2s;
    }

    .star:hover,
    .star.active {
        color: gold;
    }
</style>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Dr</span> Facelook</a>

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




          <ul class="navbar-nav ml-auto">



@if(Route::has('login'))

@auth
<li class="nav-item">
              <a class="nav-link highlight-on-hover" href="/home">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link highlight-on-hover" href="{{route('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="blog.html">News</a>
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

   <div class="navbar-nav">
    <ul class="navbar-nav">
        <li class="nav-item mt-2">
            <a  class="btn btn ml-lg-3 highlight-on-hover" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item mt-2">
            <a class="btn btn ml-lg-3 highlight-on-hover" href="{{ route('register') }}">Register</a>
        </li>
    </ul>
</div>

    @endauth
    @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>




  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">


  @foreach ($data as $doctor)

  <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
    <div class="card-doctor">
      <div class="header">
        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
        <div class="meta">
          <a href="#"><span class="mai-call"></span></a>
          <a href="/chatify/{{$doctor['user_id']}}"><span class="mai-chatbubbles-outline"></span></a>
        </div>
      </div>
      <div class="body">
        <p class="text-xl mb-0">{{$doctor['name']}}  {{$doctor['id']}}</p>
        <span class="text-sm text-grey">{{$doctor['specialization']}}</span>

        <div class="rating" data-doctor-id="{{ $doctor->id }}">
            @for ($i = 5; $i >= 1; $i--)
                <span class="star" data-value="{{ $i }}">★</span>
            @endfor
        </div>

      </div>
    </div>
  </div>



  @endforeach




            {{-- <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_2.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_1.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Stein Albert</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_2.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div> --}}

          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->


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
              <select name="departement" id="checkup" class="custom-select highlight-on-hover" aria-placeholder="Departement *">
                <option value="general">General Health</option>
                <option value="cardiology">Cardiology</option>
                <option value="dental">Dental</option>
                <option value="neurology">Neurology</option>
                <option value="orthopaedics">Orthopaedics</option>
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
              <select name="departement" id="checkup" class="custom-select highlight-on-hover">
                <option value="general">General Health</option>
                <option value="cardiology">Cardiology</option>
                <option value="dental">Dental</option>
                <option value="neurology">Neurology</option>
                <option value="orthopaedics">Orthopaedics</option>
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


  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">
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

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>


  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.star');

        stars.forEach(star => {
            star.addEventListener('click', (event) => {
                const value = event.currentTarget.getAttribute('data-value');
                const doctorId = document.querySelector('.rating').getAttribute('data-doctor-id');

                // You can send an AJAX request to update the rating on the server
                // For simplicity, this example just highlights the selected stars
                alert(`Rating ${value} submitted for Doctor ${doctorId}`);
                stars.forEach(s => s.classList.remove('active'));
                star.classList.add('active');
            });
        });
    });
</script>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
