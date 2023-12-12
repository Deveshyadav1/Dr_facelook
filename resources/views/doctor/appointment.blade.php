 <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="doctor/img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Datatables CSS  -->
  <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
  <!-- CSS  -->

  <link rel="stylesheet" type="text/css" href="doctor/css/style.css">
  <link rel="stylesheet" href="doctor/css/style2.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Welcome To Dr Facelook</title>
</head>

<style>
     .table-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .search-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-bar {
        padding: 8px;
        font-size: 14px;
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .add-button {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        color: #333;
        padding: 8px;
        text-decoration: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 0 4px;
    }
</style>
</style>

<body class="bg-gray-100">


<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center">
      <img src="doctor/img/logo.png" class="w-10 flex-none">
      <strong class="capitalize ml-1 flex-1">Dr Facelook</strong>

      <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
      </button>
    </div>
    <!-- end logo -->

    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-envelope-open-text"></i></a>
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-comments-alt"></i></a>
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-check-circle"></i></a>
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-calendar-exclamation"></i></a>
      </div>
      <!-- end left -->

      <!-- right -->
      <div class="flex flex-row-reverse items-center">

        <!-- user -->
        <div class="dropdown relative md:static">

          <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
            <div class="w-8 h-8 overflow-hidden rounded-full">
              <img class="w-full h-full object-cover" src="doctor/img/user.svg" >
            </div>

            <div class="ml-2 capitalize flex ">
              <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{Auth::user()->name}}</h1>
              <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
            </div>
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-edit text-xs mr-1"></i>
              edit my profile
            </a>
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-inbox-in text-xs mr-1"></i>
              my inbox
            </a>
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-badge-check text-xs mr-1"></i>
              tasks
            </a>
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="/chatify">
              <i class="fad fa-comment-alt-dots text-xs mr-1"></i>
              chats
            </a>
            <!-- end item -->

            <hr>

            <!-- item -->
            <a href="{{ route('logout') }}" class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">log out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

                    </a>
            <!-- end item -->

          </div>
        </div>
        <!-- end user -->




        <!-- notifcation -->
        <div class="dropdown relative mr-5 md:static">

          <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
            <i class="fad fa-bells"></i>
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
            <!-- top -->
            <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
              <h1>notifications</h1>
              <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                <strong>5</strong>
              </div>
            </div>
            <hr>
            <!-- end top -->

            <!-- body -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-birthday-cake text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">poll..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>4 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-user-circle text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">mohamed..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>78 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-images text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">new imag..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>65 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-alarm-exclamation text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">time is up..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>1 min ago</p>
                </div>
              </div>

            </a>
            <!-- end item -->


            <!-- end body -->

            <!-- bottom -->
            <hr>
            <div class="px-4 py-2 mt-2">
              <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                view all
              </a>
            </div>
            <!-- end bottom -->
          </div>
        </div>
        <!-- end notifcation -->

        <!-- messages -->
        <div class="dropdown relative mr-5 md:static">

          <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
            <i class="fad fa-comments"></i>
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
            <!-- top -->
            <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
              <h1>messages</h1>
              <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                <strong>3</strong>
              </div>
            </div>
            <hr>
            <!-- end top -->

            <!-- body -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                <img class="w-full h-full object-cover" src="doctor/img/user1.jpg" alt="">
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">mohamed said</h1>
                  <p class="text-xs text-gray-500">yeah i know</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>4 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                <img class="w-full h-full object-cover" src="doctor/img/user2.jpg" alt="">
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">sull goldmen</h1>
                  <p class="text-xs text-gray-500">for sure</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>1 day ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                <img class="w-full h-full object-cover" src="doctor/img/user3.jpg" alt="">
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">mick</h1>
                  <p class="text-xs text-gray-500">is typing ....</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>31 feb</p>
                </div>
              </div>

            </a>
            <!-- end item -->


            <!-- end body -->

            <!-- bottom -->
            <hr>
            <div class="px-4 py-2 mt-2">
              <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                view all
              </a>
            </div>
            <!-- end bottom -->
          </div>
        </div>
        <!-- end messages -->


      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>
<!-- end navbar -->


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="/home" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>
        Analytics dashboard
      </a>
      <!-- end link -->


      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>


      <a href="/appointment" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-xs mr-2"></i>
        Appointments
      </a>

      <a href="/patients" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out   duration-500">
        <i class="fad fa-shield-check text-xs mr-2"></i>
        Patients
      </a>




      <!-- link -->
      <a href="/chatify" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-xs mr-2"></i>
        chat
      </a>
      <!-- end link -->



      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-calendar-edit text-xs mr-2"></i>
        Pharmacy Vendors
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-file-invoice-dollar text-xs mr-2"></i>
        invoice
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-xs mr-2"></i>
        file manager
      </a>
      <!-- end link -->


      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">......................................</p>



    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->


<?php
use App\Models\User;

$users = User::where('usertype', 0)->get();

// echo"<pre>";print_r($users);die();

?>



  {{-- ========================================================== Start Content ================================================================ --}}


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" style="width:600px;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">New Appoientment </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      
      <form method="POST" class="main-form">
        
        <div class="row mb-3">
           <div class="col">
             <!-- <label class="form-label">Name</label> -->
             <input type="text" class="form-control" name="name" id="name" placeholder="Name ">
           </div>
          <div class="col">
             <!-- <label class="form-label">Email</label> -->
             <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
        </div>
        
         <input type="hidden" name="doctor_id" id="doctor_id" value="{{Auth::user()->id}}">

        <div class="row mb-3">
          <!-- <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}"> -->
           
           <div class="col">
              <!-- <label class="form-label">Date</label> -->
              <input type="date" class="form-control" id="myDateInput" name="myDateInput" placeholder="Date *"> 
           </div>

            <div class="col">
              <div class="mb-3">
               <!-- <label class="form-label">Checkup Type</label> -->
               <select name="checkup_type" id="checkup_type" class="form-control">
                 <option value="General Health">General Health</option>
                 <option value="Cardiology">Cardiology</option>
                 <option value="Dental">Dental</option>
                 <option value="Neurology">Neurology</option>
                 <option value="Orthopaedics">Orthopaedics</option>
               </select>
              </div>  
            </div>
         
        </div>


              <div class="mb-3">
               <!-- <label class="form-label">Checkup Type</label> -->
               <select name="user_id" id="user_id" class="form-control">
                 
                 @foreach ($users as $user) 
                   
                   <option value="{{$user['id']}}">{{$user['name']}}</option>
                  @endforeach
                 
                 
               </select>
              </div>  
           

         <div class="mb-3">
             <!-- <label class="form-label">Phone</label> -->
             <input type="number" class="form-control" id="number" name="number" placeholder="Phone ">
         </div>
        
         <!-- <div class="row mb-3">
            <label class="form-label">Upload Image</label>
              <div class="col-2">
               <img class="preview_img" src="images/default_profile.jpg">
              </div>

             <div class="col-10">
              <div class="file-upload text-secondary">
                <input type="file" class="image" id="image" name="image" accept="image/*">
                <span class="fs-4 fw-2">Choose file...</span>
                <span>or drag and drop file here</span>
              </div>
             </div>
         </div> -->

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control highlight-on-hover" rows="6" placeholder="Enter message"></textarea>
          </div>
      
        <div>

          <div style="display:flex;" class="button-container">
            <button type="submit" class="add-button wow zoomIn" id="insertBtn" style="background-color: #darkblue;">Submit</button>&nbsp;

            <button type="button" class="add-button" data-bs-dismiss="offcanvas" style="background-color: #090909">Cancel</button>
          </div>
           
        </div>
      </form>
    </div>
  </div>






  <div class="bg-gray-100 flex-1 p-6 md:mt-16">

    <h3 style="text-align: left">Appointments</h3>

    <br>


    <div class="search-container">
        <input type="text" class="search-bar" id="searchInput" placeholder="Search...">
        
        <button class="add-button" id="offcanvasExampleLabel" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser" >Add</button>

    </div>

    <!-- <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
        <i class="fa-solid fa-user-plus fa-xs"></i>
        Add new user
      </button> -->











    <table class="table-fixed w-full">

        <!-- table head -->
        <thead class="text-left">
            <tr>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Patient</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Checkup</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Phone</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Date</th>
            
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Action</th>
            </tr>
        </thead>
        <!-- end table head -->

        <!-- table body -->
        <tbody class="text-left text-gray-600">


@foreach ($appointments as $item)




            <!-- item -->
            <tr>
                <!-- name -->
                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-left">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img height="100%" width="100%" src="{{$item->profile_photo_url ?? 'doctor/img/user1.jpg'}}" class="profile_photo_url" alt="">
                    </div>
                    <p class="ml-3">{{$item->name}}</p>
                </th>
                <!-- name -->

                <?php


                ?>

            </th>

            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">{{$item->checkup_type}}</th>

            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">{{$item->phone}}</th>

            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">{{ \Carbon\Carbon::parse($item->date)->format('j F Y') }}


                <!-- <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">{{$item->message}}</th> -->


              <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">

                <div class="flex flex-row justify-center items-center">
                  <a href="/chatify/{{$item->user_id}}"> <img height="35px" width="35px" src="https://i.pinimg.com/1200x/ee/ba/26/eeba26add7248f938ebd1b97fa41fba3.jpg" class="profile_photo_url" alt=""> </a> &nbsp;&nbsp;

                    <a href="#" class="btn mr-4 text-sm py-2 block">Edit</a>
                    <a href="#" style="background-color: red" class="btn-shadow text-sm py-2 block">Delete</a>
                </div>

              </th>

            </tr>

@endforeach


        </tbody>
        <!-- end table body -->

    </table>














  </div>

  <!-- ============================================================end content  ==================================================================-->







</div>
<!-- end wrapper -->

<!-- script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Datatables  -->
  <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
  <!-- JS  -->


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="doctor/js/scripts.js"></script>


<script>
    
  // function to display image before upload
  $("input.image").change(function() {
    var file = this.files[0];
    var url = URL.createObjectURL(file);
    $(this).closest(".row").find(".preview_img").attr("src", url);
  });

  </script>


  <script>
  $(document).ready(function() {
    $('.main-form').submit(function(e) {
      e.preventDefault();

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
      if (!formData.date || !formData.checkup_type) {
        // Show an error toast
        Toastify({
          text: 'Validation failed: Please fill * required fields.',
          duration: 3000,
          close: true,
          gravity: 'top',
          position: 'center',
          backgroundColor: '#ff6347', // Tomato color for error
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
            backgroundColor: '#ff6347', // Tomato color for error
            stopOnFocus: true
          }).showToast();
        }
      });
    });
  });
</script>


<!-- end script -->

</body>
</html>
