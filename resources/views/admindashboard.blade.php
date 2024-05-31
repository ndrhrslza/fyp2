@extends('navbar.adminleftbar')
@extends('dashboxes')

@section('content')
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
            <div class="text-center bg-light p-4">

                <p><h3> Welcome to Admin Dashboard Management
                </h3>
            </p>


            </div>
            <br><br>
            <br><br>

            <body>

                <div class="gallery">
                  <div class="gallery-item">
                    <img src="{{ asset('images/upload.png') }}" alt="UPLOAD">
                    <div class="textbox">
                        <a href="{{ route('uploadfile') }}">Upload Contents</a>

                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="{{ asset('images/feedback.jpg') }}" alt="FEEDBACK">
                    <div class="textbox">
                        <a href="{{ route('feedback.userfeedback') }}">Feedbacks</a>
                        <br>

                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="{{ asset('images/quiz.jpg') }}" alt="QUIZ">
                    <div class="textbox">
                        <a href="{{ route('quizzes.index') }}">Manage Quiz</a>
                        <br><br>

                    </div>
                  </div>
                  <!--<div class="gallery-item">
                    <img src="{{ asset('images/audit.jpg') }}" alt="AUDIT">
                    <div class="textbox">
                        <a href="{{ route('course.coursepage') }}">Control & Audit of Information System</a>
                        <br>
                      <p>IT audits ensure that controls protect company assets, preserve data integrity, and align with business goals.
                        It confirms the proper functioning of information-related controls and processes.</p>
                    </div>
                  </div>-->
                </div>

                </body>
    </div>
</div>
@endsection


