@extends('navbar.dashboardleftbar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">
<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 3: Risk Management in Organization @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            <p>This chapter is a comprehensive overview of ISO/IEC 31000:2018, which outlines the principles, framework, and process of risk management in organizations.
                It emphasizes the importance of integrating risk management into organizational activities, involving stakeholders, and continually improving through learning and experience.
                The standard applies to all types of risks and organizations, advocating for a structured and customized approach to managing risk,
                with a strong focus on leadership commitment and the effective communication and consultation of risk-related information.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=wNYTmM955-U" target="_blank">Youtube: ISO 31000: Risk Management for Organizations by Learning Channel - Product safety, compliance, standards, legislation, CE marking</a>
            <br>
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=K2iErAuIDEc" target="_blank">48 How can risk management be incorporated into business and operational processes? by RiskDoctorVideo</a>


            <!-- Link to external video -->
        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 3)->where('course', 'Risk Management')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 3)->where('course', 'Risk Management')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 3)->where('course', 'Risk Management')->get();
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
