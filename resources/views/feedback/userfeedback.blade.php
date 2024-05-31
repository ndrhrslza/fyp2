@extends('navbar.dashboardleftbar')

@section('content')
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        @if (session('status'))
                <script type="text/javascript">
                    $(document).ready(function() {
                        toastr.success('{{ session('status') }}');
                    });
                </script>
            @endif
        <a href="{{route('profile.profilefrontpage')}}"><-Back</a>
        <br><br>

        <h2> Share your feedback</h2>
        <h5>We value your feedback! Your thoughts are important to us as we strive to continuously enhance your experience.
            Share your comments with us, and let's build something great together!</h5>
        <br><br>
        <p>Please leave your feedback in the form below:</p>
        <br>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="content">Feedback:</label>
                <textarea style="min-height: 50vh;" name="feedback" id="content" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Submit Feedback</button>
        </form>
    </div>
</div>
@endsection
