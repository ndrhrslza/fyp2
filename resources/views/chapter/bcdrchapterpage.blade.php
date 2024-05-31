@extends('navbar.dashboardleftbar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">

<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    @yield('chapter')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 1: Business Continuity and Disaster Recovery Overview @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            @yield('overview')
            <p>Understand the importance of Business Continuity and Disaster Recovery management in businesses and apply it using best practices, tools and processes.
                <br>Demonstrate leadership, effective communication, and teamwork in projects while adhering to Islamic ethical and professional duties in Business Continuity and Disaster Recovery management.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://youtu.be/o0xj1JKjjOE?si=JqUzKPMdL9jfkZMe" target="_blank">Youtube: What is Business Continuity and Disaster Recovery Planning? by CBT Nuggets</a>
        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Reading Notes')->where('chapter', 1)->where('course', 'Business Continuity & Disaster Recovery')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 1)->where('course', 'Business Continuity & Disaster Recovery')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 1)->where('course', 'Business Continuity & Disaster Recovery')->get();
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
