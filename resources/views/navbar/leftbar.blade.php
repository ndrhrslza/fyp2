<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SecurityJourney</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset ('import/navbar/css/style.css')}}">
    <!-- Favicons -->
    <link href="{{ asset ('import/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset ('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset ('import/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset ('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset ('import/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Header from landingpage.blade.php -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>SecurityJourney</span></a></h1>
       </div>
    </div>

        <nav id="navbar" class="navbar">
           <ul>
                <li><a class="nav-link" href="{{ route('landingpage') }}">Home</a></li>
                <li><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a class="nav-link" href="{{ route('articlepage') }}">Article</a></li>
                <li><a class="nav-link" href="{{ route('profile.profilefrontpage') }}">Profile</a></li>
            </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </div>

    </header><!-- End Header -->@yield('header')
    <!-- End Header -->
<!--Leftsidebar-->
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <ul class="list-unstyled components mb-5">
            <li><a href="{{ route('course.coursepage') }}"><span class="nav-link"></span>Management of Information Security @yield('title')</a></li><!-- Back to overview page -->
            <li><a href="{{ route('chapter.chapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
            <li><a href="{{ route('chapter.mis2') }}"><span class="nav-link"></span> Chapter 2</a></li>
            <li><a href="{{ route('chapter.mis3') }}"><span class="nav-link"></span> Chapter 3</a></li>
            <li><a href="{{ route('chapter.mis4') }}"><span class="nav-link"></span> Chapter 4</a></li>
            <li><a href="{{ route('chapter.mis5') }}"><span class="nav-link"></span> Chapter 5</a></li>
            <li><a href="#"><span class="nav-link"></span> Quiz</a></li>
        </ul>
    </nav>
    <!-- End left side bar -->
    @yield('content')
</div>
<script src="{{ asset ('import/navbar/js/jquery.min.js')}}"></script>
<script src="{{ asset ('import/navbar/js/popper.js')}}"></script>
<script src="{{ asset ('import/navbar/js/bootstrap.min.js')}}"></script>
<script src="{{ asset ('import/navbar/js/main.js')}}"></script>
</body>
</html>
