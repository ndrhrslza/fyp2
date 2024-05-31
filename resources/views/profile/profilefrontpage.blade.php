@extends('navbar.dashboardleftbar')

@section('content')

<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
        <h1> Hi, {{ $username }}!</h1>
        <br><br>
        @if(auth()->check())
        @php
        $lastLoginTime = auth()->user()->last_login_at;
        @endphp
        @if(Auth::check() && Auth::user()->isAdmin())

        @else
        @if($lastLoginTime)
        <div style="margin-bottom: 1rem;">
            <strong>The last page you visited: </strong>
        </div>


        @php
        $lastVisitedUrl = auth()->user()->browserHistories()
        ->orderByDesc('created_at')
        ->value('url');
        $titlePath = auth()->user()->browserHistories()
        ->orderByDesc('created_at')
        ->value('title');
        @endphp

        @if($lastVisitedUrl)
        @php
        $parsedUrl = parse_url($lastVisitedUrl);
        $path = $parsedUrl['path'] ?? '';
        @endphp

        <div class="text-center" style="background-color: lightgray; border-radius: 1.5rem;">
            <div class="gallery-item">
                <a href="{{ route($path) }}">
                    <div style="display: flex;">
                        <img style="height: 9rem; border-radius: 1.5rem 0 1.5rem 0;" src="{{ asset('images/' . $path . '.jpg') }}" alt="MIS">
                        <div style="padding: 1rem;">
                            <a style="font-weight: bold; color: black;" href="{{ route($path) }}" @if(Route::currentRouteName()== $path ) @endif>{{ $titlePath }}</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @else
        <p>No browsing history found for this user.</p>
        @endif
        @else
        <p>Welcome, first-time user!</p>
        @endif
        @endif
        @endif

        <br><br>

        <!--<div class="text-center bg-light p-4">-->
        <h3><a href="{{route('profile.edit')}}" style="text-decoration: none; color: black;">Edit Profile</a></h3>
        <br>

        @if(Auth::check() && !Auth::user()->isAdmin())
        <hr class="short-line">
        <br>
        <h3><a href="{{route('feedback.userfeedback')}}" style="text-decoration: none; color: black;">Feedback</a></h3>
        <br>
        @endif
        <hr class="short-line">
        <br>
        <h3><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <button type="submit">Logout</button>
        </form>

            <a style="color: black;" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </h3>

    </div>
    <br><br>

    <!--<div class="mb-4" style="text-align: center;">List of available articles: </h2></p>
             Box with text in the middle for overview
            <div class="text-center bg-light p-4">
                <p>la pariatur. Excepteur sint occa</p>
                <br><br>
                <div class="text-center bg-light p-4">
                    <p>diwjdkj</p>
                </div>
            </div>
    </div>


</div>

@endsection
