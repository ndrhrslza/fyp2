@extends('navbar.dashboardleftbar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">
<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 1: Introduction to CyberSecurity @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            <p>This chapter emphasizing the importance of understanding and managing cybersecurity risks, applying risk assessment tools, and fostering ethical and professional responsibilities in risk management.
                It also integrates discussions on the impact of cybersecurity on societal goals like the Sustainable Development Goals (SDGs) and Maqasid Shariah
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=inWWhr5tnEA" target="_blank">Youtube: Cyber Security In 7 Minutes | What Is Cyber Security: How It Works? | Cyber Security | Simplilearn by Simplilearn</a><!-- Link to external video -->
        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 1)->where('course', 'Risk Management')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 1)->where('course', 'Risk Management')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 1)->where('course', 'Risk Management')->get();
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
