<!-- // resources/views/components/header.blade.php -->

<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1 class="text-light"><a href="{{ route('home') }}"><span>SecurityJourney</span></a></h1>
    </div>

    <x-navbar />

  </div>
</header>