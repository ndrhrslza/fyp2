<x-head />

<x-header />


<section class="p-3 p-md-4 p-xl-5" style="margin-top: 4.5rem;">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0">
        <div class="col-12 col-md-6 text-bg-primary">
          <div style="background-color: #425451;" class="d-flex align-items-center justify-content-center h-100">
            <div class="col-10 col-xl-8 py-3">
              <!-- <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg" width="245" height="80" alt="BootstrapBrain Logo"> -->
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-4">Forgot Password</h2>
              <p class="lead m-0">SecurityJourney delivers practical courses to assist everyone with their education. Join us on our path to becoming a skilled cybersecurity expert, one course at a time.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Forgot Password</h3>
                </div>
              </div>
            </div>
            <form action="{{ route('reset-password-email') }}" method="POST">
              @csrf
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com" required>
                  @error('email')
                  <span style="color: red;">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button style="background-color: #425451;" class="btn bsb-btn-xl btn-primary" type="submit">Sent Reset Link</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('sweetalert::alert')

<head>
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">
</head>
