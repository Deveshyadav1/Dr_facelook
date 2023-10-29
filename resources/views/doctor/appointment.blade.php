<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Include Bootstrap CSS (replace the URL with the actual path) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include FontAwesome CSS (replace the URL with the actual path) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Include jQuery (required for date and time picker) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JavaScript (required for modals) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include a date and time picker library (e.g., Tempus Dominus) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>


    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="doctor/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="doctor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="doctor/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="doctor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="doctor/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <!-- <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i></h3>
                </a> -->
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="doctor/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <a href="/home">
                    <div class="ms-3">
                        <h6 class="mb-0">{{Auth::user()->name}}</h6>
                        <span>Doctor</span>
                    </div>
                </a>
                </div>
                <div  style="background: transparent;" class="navbar-nav w-100">
                    <a href="/home" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Appointment</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/appointment" class="dropdown-item active">Add Appointment</a>
                            <a href="/appointment_status" class="dropdown-item">Appointment Status</a>
                            <a href="/appointment_type" class="dropdown-item">Appointment Types</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div  class="nav-item dropdown">
                        <a  href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div  class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a  href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="doctor/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="doctor/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="doctor/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="doctor/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('profile.show') }}" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('logout') }}" class="dropdown-item"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Button Start -->
          <div class="container-fluid pt-4 px-4">
                <div class="row g-4">  
           <div class="col-12">


<style>

 .video-conference-btn {
            font-size: 24px; /* Adjust the icon size as needed */
            border-radius: 50%; /* Make the button round */
            width: 60px; /* Set the button width */
            height: 60px; /* Set the button height */
        }
  </style>

                        <div class="bg-light rounded h-100 p-4">
                            
                           <button class="btn btn-primary video-conference-btn" data-toggle="modal" data-target="#videoConferenceModal">
    <i class="fas fa-video"></i>
</button><i class="fa fa-plus"></i>

                         <div class="table-responsive">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Button End -->

<!-- ================================== Video confrencing model ========================== -->

<div class="modal fade" id="videoConferenceModal" tabindex="-1" role="dialog" aria-labelledby="videoConferenceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoConferenceModalLabel">Video Conference Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for Video Conference Details -->
                <form id="appointment-form">
                    <div class="form-group">
                        <label for="conferenceTitle">Title</label>
                        <input type="text" class="form-control" id="conferenceTitle" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="dateTimePicker">Date and Time</label>
                        <div class="input-group date" id="dateTimePicker" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#dateTimePicker"/>
                            <div class="input-group-append" data-target="#dateTimePicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- You can add user profiles selection here -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="schedule-button">Schedule</button>
            </div>
        </div>
    </div>
</div>

<!-- Initialize date and time picker -->
<script>
    $('#dateTimePicker').datetimepicker();
</script>




<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 col-xl-6">

                    </div>
   

<!-- <div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Responsive Table</h6>
        <div class="search-container">
    <input type="text" id="search-input" placeholder="Search..." style="padding: 5px; border: 1px solid #ccc; border-radius: 5px; float: right;">
</div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date / Time</th>
                        <th scope="col">Members</th>
                        <th scope="col">Meeting ID</th>
                        <th scope="col">created_at</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <th scope="row">{{ $appointment->id }}</th>
                            <td>{{ $appointment->title }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->datetime)->format('j F Y') }} {{ \Carbon\Carbon::parse($appointment->datetime)->format('g:i A') }} </td>
                            <td>{{ $appointment->members }}</td>
                            <td>{{ $appointment->meet_id }}</td>
                            <td>{{ $appointment->created_at }}</td>
                            <td>{{ $appointment->status }}</td>

                            <td><button class="btn btn-primary m-2">Edit</button> </td>
                            <td><button class="btn btn-danger m-2">Delete</button> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
                </div>
            </div> -->






  <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
 
 <div class="search-container">
    <input type="text" id="search-input" placeholder="Search..." style="padding: 5px; border: 1px solid #ccc; border-radius: 5px; float: right;">
</div>

                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    
                                    
                                    <th scope="col">Title</th>
                                    <th scope="col">Date / Time</th>
                                    <th scope="col">Members</th>
                                    <th scope="col">Meeting ID</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                
                                $ststus;
                                $color;
                                <?php if($appointment->status==0)
                                         {
                                            
                                            $status="scheduled";
                                         }
                                         elseif ($appointment->status==1) {
                                          
                                          $status="Completed";   
                                          
                                          /*$status = array('text' => 'Completed', 'color' => 'danger' );*/
                                         }
                                         elseif ($appointment->status==2) {
                                             
                                             $status="Ongoing";
                                             /*$status = array('text' => 'Ongoing', 'color' => 'success' );*/
                                         }
                                         else
                                         {

                                         }
                                  ?>

                                <tr>
                                    
                                    <!-- <th scope="row">{{ $appointment->id }}</th> -->
                                    <td>{{ $appointment->title }}</td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->datetime)->format('j F Y') }} {{ \Carbon\Carbon::parse($appointment->datetime)->format('g:i A') }} </td>
                                    <td>{{ $appointment->members }}</td>
                                    <td>{{ $appointment->meet_id }}</td>
                                    <td>{{ $appointment->created_at }}</td>
                                    <td><button type="button" class="btn btn-info rounded-pill m-2"> <?php $status;/*$status['text'];*/ ?></button></td>
                                    <td><button class="btn btn-danger m-2">Delete</button> </td> 
                                    
                                    
                                </tr>
                                  @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>







<!-- ======================================================================================= -->



            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Dr. Facelook</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


<!-- Include jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include toastr library (make sure it's included in your project) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script>
    $(document).ready(function() {
        $("#search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("table tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#dateTimePicker').datetimepicker();

        $('#schedule-button').click(function() {
            var title = $('#conferenceTitle').val();
            var datetime = $('#dateTimePicker input').val();
            
            // Get the CSRF token value from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            
            // Include the CSRF token in the AJAX headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('create.appointment') }}",
                data: {
                    title: title,
                    datetime: datetime
                },
                success: function(response) {
                    // Handle the success response
                    console.log(response);

                    // Clear the input fields
                    $('#conferenceTitle').val('');
                    $('#dateTimePicker input').val('');

                    // Close the modal
                    $('#videoConferenceModal').modal('hide');

                    // Show a success toast message
                    toastr.success('Meeting created successfully', 'Success');
                },
                error: function(error) {
                    // Handle the error response
                    console.log(error);
                    alert("Appointment scheduling failed.");
                }
            });
        });
    });
</script>










    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="doctor/lib/chart/chart.min.js"></script>
    <script src="doctor/lib/easing/easing.min.js"></script>
    <script src="doctor/lib/waypoints/waypoints.min.js"></script>
    <script src="doctor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="doctor/lib/tempusdominus/js/moment.min.js"></script>
    <script src="doctor/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="doctor/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="doctor/js/main.js"></script>
</body>

</html>