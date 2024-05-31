@extends('navbar.dashboardleftbar')
@extends('dashboxes')
@section('content')
<!-- Page Content  -->
@if(Auth::check() && Auth::user()->isAdmin())
<div class="wrapper d-flex align-items-stretch justify-content-center">
  <div id="content" class="p-4 p-md-5">
    <div>
      <h1>Welcome to Admin Dashboard Management</h1>
    </div>
    <div class="d-flex justify-content-center mt-5 gap-5">
      <a href="{{ route('uploadFiles.index') }}" class="dashboard-link">
        <div class="dashboard-item">
          <img src="{{ asset('images/upload.png') }}" alt="upload">
          <div class="dashboard-overlay">
            <p>Upload Contents</p>
          </div>
          <p class="dashboard-label">Upload Contents</p>
        </div>
      </a>
      <a href="{{ route('feedbacks.view') }}" class="dashboard-link">
        <div class="dashboard-item">
          <img src="{{ asset('images/feedback.jpg') }}" alt="feedback">
          <div class="dashboard-overlay">
            <p>Feedbacks</p>
          </div>
          <p class="dashboard-label">Feedbacks</p>
        </div>
      </a>
      <a href="{{ route('quizzes.index') }}" class="dashboard-link">
        <div class="dashboard-item">
          <img src="{{ asset('images/quiz.jpg') }}" alt="quiz">
          <div class="dashboard-overlay">
            <p>Manage Quiz</p>
          </div>
          <p class="dashboard-label">Manage Quiz</p>
        </div>
      </a>
    </div>
  </div>

</div>

@else
<div class="wrapper d-flex align-items-stretch justify-content-center">
  <div id="content" class="p-4 p-md-5 pt-5">
    <!-- Box with text in the middle -->
    <div class="text-center bg-light p-4">


      <p>
        <h2> Hadith on Knowledge :</h2>
      <h3>أَنَّ رَسُولَ اللَّهِ ـ صلى الله عليه وسلم ـ قَالَ ‏ "‏ إِنَّ اللَّهَ لاَ يَقْبِضُ الْعِلْمَ انْتِزَاعًا يَنْتَزِعُهُ مِنَ النَّاسِ وَلَكِنْ يَقْبِضُ الْعِلْمَ بِقَبْضِ الْعُلَمَاءِ فَإِذَا لَمْ يُبْقِ عَالِمًا اتَّخَذَ النَّاسُ رُءُوسًا جُهَّالاً فَسُئِلُوا فَأَفْتَوْا بِغَيْرِ عِلْمٍ فَضَلُّوا وَأَضَلُّوا ‏"‏ ‏.‏

      </h3>
      </p>

      <p>It was narrated from 'Abdullah bin 'Amr bin 'As that:
        the Messenger of Allah (ﷺ) said: 'Allah will not take away knowledge by removing it from people (from their hearts). Rather He will take away knowledge by taking away the scholars, then when there are no scholars left, the people will take the ignorant as their leaders. They will be asked questions and they will issue verdicts without knowledge, thus they will go astray and lead others astray.'"
      </p>
      <br>
      <p>Grade:	 Sahih (Darussalam) |
Reference	 : Sunan Ibn Majah 52 |
In-book reference	 : Introduction, Hadith 52 |
English translation	 : Vol. 1, Book 1, Hadith 52</p>

    </div>
    <br><br>
    <h2 style="text-align: center;">List of available courses: </h2>
    <br><br>
    <div class="text-center bg-light p-4">
      <div class="row" style="--bs-gutter-x: 0;">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="gallery-item">
            <a href="{{ route('course.coursepage') }}">
              <img src="{{ asset('images/mis.jpg') }}" alt="MIS">
              <div class="textbox">
                <a href="{{ route('course.coursepage') }}">Management of Information Security</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="gallery-item">
            <a href="{{ route('course.bcdrcoursepage') }}">
              <img src="{{ asset('images/bcdr.jpg') }}" alt="BCDR">
              <div class="textbox">
                <a href="{{ route('course.bcdrcoursepage') }}">Business Continuity & Disaster Recovery</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="gallery-item">
            <a href="{{ route('course.riskcoursepage') }}">
              <img src="{{ asset('images/risk.jpeg') }}" alt="RISK">
              <div class="textbox">
                <a href="{{ route('course.riskcoursepage') }}">Risk Management</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="gallery-item">
            <a href="{{ route('course.auditcoursepage') }}">
              <img src="{{ asset('images/audit.jpg') }}" alt="AUDIT">
              <div class="textbox">
                <a href="{{ route('course.auditcoursepage') }}">Control & Audit of Information System</a>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@endsection

<style>
  .dashboard-item {
  position: relative;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.dashboard-item img {
  height: 10rem;
  width: 15rem;
}

.dashboard-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1.5rem;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.dashboard-overlay p {
  color: white;
  font-weight: bold;
  text-align: center;
}

.dashboard-label {
  text-align: center;
  margin-top: 10px;
  background-color: lightgrey;
  padding: 1.5rem;
  font-weight: bold;
  color: black;
}

.dashboard-link:hover .dashboard-item {
  transform: scale(1.05);
}

.dashboard-link:hover .dashboard-overlay {
  opacity: 1;
}

@media (max-width: 768px) {
  .dashboard-item {
    margin: 10px 0;
  }

  .d-flex.justify-content-center {
    flex-wrap: wrap;
  }
}

</style>
