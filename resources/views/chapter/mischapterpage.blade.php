@extends('navbar.dashboardleftbar')


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">

<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    @yield('chapter')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 1: Introduction to Information Security Management @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            @yield('overview')
            <p>An overview of information security is provided in this chapter, along with information on its properties, sources, and effects on both persons and organizations.
                Additionally, it addresses the ISO/IEC 27002 standard and how information security relates to the SDGs and Maqasid Shariah.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=WrsPDjyV5xQ" target="_blank">Yotube: Introduction to Information Security by BYU OIT</a>
            <!-- Link to external video -->
        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Reading Notes')->where('chapter', 1)->where('course', 'Management of Information Security')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 1)->where('course', 'Management of Information Security')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 1)->where('course', 'Management of Information Security')->get();
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
