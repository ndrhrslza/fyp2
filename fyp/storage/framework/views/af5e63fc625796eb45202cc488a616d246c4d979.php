<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SecurityJourney</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset ('import/assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset ('import/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset ('import/assets/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset ('import/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset ('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset ('import/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset ('import/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset ('import/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset ('import/assets/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>SecurityJourney</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li><a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('login')); ?>"class="ml-4 text-sm text-gray-700 underline">Log in</a></li>

                        <?php if(Route::has('register')): ?>
                            <li><a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                  <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <!--<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>-->

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?php echo e(asset('images/background.png')); ?>);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">SecurityJourney:</h2>
                <h2 class="animate__animated animate__fadeInDown">Online Information Security Learning System</h2>
                <p class="animate__animated animate__fadeInUp">SecurityJourney delivers practical courses to assist everyone with their education. Join us on our path to becoming a skilled cybersecurity expert, one course at a time.</p>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset ('import/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset ('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('import/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('import/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('import/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('import/assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(asset ('import/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset ('import/assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/landingpage.blade.php ENDPATH**/ ?>