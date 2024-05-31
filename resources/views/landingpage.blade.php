
<x-head />
<body>
  <!-- ======= Header ======= -->
  <x-header />
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <!--<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>-->

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ asset('images/background.png') }});">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"> Welcome to SecurityJourney:</h2>
              <h2 class="animate__animated animate__fadeInDown">Online Information Security Learning System</h2>
              <p class="animate__animated animate__fadeInUp">SecurityJourney delivers practical courses to assist everyone with their education. Join us on our path to becoming a skilled cybersecurity expert, one course at a time.</p>
              <a href="{{ route('dashboard') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>
