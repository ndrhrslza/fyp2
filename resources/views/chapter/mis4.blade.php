@extends('navbar.dashboardleftbar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">

<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    @yield('chapter')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 4: Information Security Policy @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            @yield('overview')
            <p>This chapter is a comprehensive guide on information security policy from "Management of Information Security, 6th ed. - Whitman & Mattord." It emphasizes the importance of policy as the foundation of an effective information security program, detailing the roles and responsibilities within an organization to ensure reduced risk and compliance with laws.
               This chapter also outlines the creation, implementation, and maintenance of various types of information security policies, including enterprise, issue-specific, and system-specific policies. It also discusses
                the significance of policy in guiding personnel behavior and the necessity for policies to be current, reviewed, and modified regularly to address evolving threats.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=hjt5DDaSDFM" target="_blank">Youtube: Information Security Policies by InfoSec4TC</a>
            <br>
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=9eQuEEKtjHs" target="_blank">Youtube: What is Enterprise Information Security Management? by BroadCom Infrastructure Software</a><!-- Link to external video -->
        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Reading Notes')->where('chapter', 4)->where('course', 'Management of Information Security')->get();
        @endphp
        @if(isset($pdfForEachChapter) && $pdfForEachChapter->isNotEmpty())
        <h4>Reading Notes:</h4>
        @foreach ($pdfForEachChapter as $pdfFile)
        <div class="link">
            <i class="fas fa-book"></i>
            <a href="{{ route('view-pdf', ['filename' => $pdfFile->file_path]) }}" target="_blank">{{ $pdfFile->file_name }}</a>
        </div>
        @endforeach
        @endif

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 4)->where('course', 'Management of Information Security')->get();
        @endphp
        @if(isset($pdfForEachChapter) && $pdfForEachChapter->isNotEmpty())
        <h4>Visual Notes:</h4>
        @foreach ($pdfForEachChapter as $pdfFile)
        <div class="link">
            <i class="fas fa-book"></i>
            <a href="{{ route('view-pdf', ['filename' => $pdfFile->file_path]) }}" target="_blank">{{ $pdfFile->file_name }}</a>
        </div>
        @endforeach
        @endif

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 4)->where('course', 'Management of Information Security')->get();
        @endphp
        @if(isset($pdfForEachChapter) && $pdfForEachChapter->isNotEmpty())
        <h4>Exercise Modules:</h4>
        @foreach ($pdfForEachChapter as $pdfFile)
        <div class="link">
            <i class="fas fa-book"></i>
            <a href="{{ route('view-pdf', ['filename' => $pdfFile->file_path]) }}" target="_blank">{{ $pdfFile->file_name }}</a>
        </div>
        @endforeach
        @endif
    </div>
</div>
</div>
@endsection
