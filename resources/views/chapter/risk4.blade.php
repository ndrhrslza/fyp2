@extends('navbar.dashboardleftbar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">
<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 4: Information Security Risk Management @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            <p>This chapter provides a comprehensive overview of Information Security Risk Management (ISRM), detailing the NIST Risk Management Framework (RMF) and ISO/IEC 27000 ISMS series. It emphasizes
                the importance of integrating risk management into the System Development Life Cycle (SDLC) to protect organizational operations, assets, and national interests from various threats.
                This chapter also outlines the ISMS phases, critical success factors, and the significance of ISMS for legal and regulatory compliance, continual improvement, and protection against a wide range of threats.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=_bSPApZ-hQc" target="_blank"> Youtube: Cyber Security Compliance: What is ISO 27005 Standard? by Cyber Today Academy</a><!-- Link to external video -->
        <br>
        <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=ty-YITGAHyI" target="_blank"> Youtube: Information Security Risk Management (ISO 27005) - Course Overview by EC-Council Learning</a>


        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 4)->where('course', 'Risk Management')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 4)->where('course', 'Risk Management')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 4)->where('course', 'Risk Management')->get();
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
