@extends('navbar.dashboardleftbar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset ('import/style.css')}}" rel="stylesheet">

<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    @yield('chapter')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 2: Legal and Regulatory Obligation Regarding Data and Information Security @yield('chaptitle')</h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            @yield('overview')
            <p>Understanding the impact of recent history on Business Continuity and Disaster Recovery management.
                Apply the principles of Business Continuity and Disaster Recovery management in the context of legal and regulatory obligations.
                Exposing the cyber laws in the U.S and the impact of the GDPR on the global economy.  The importance of ensuring that the organization is compliant with the laws and regulations that govern the industry.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
          <i class="fas fa-file-video"></i>
            <a href="https://youtu.be/azcuCiq0EIo?si=hmIXNKVjS2cbFc39" target="_blank">Youtube: Information Security Policies by MrBrownCS</a>
        </div>

        @php
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Reading Notes')->where('chapter', 2)->where('course', 'Business Continuity & Disaster Recovery')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Visual Notes')->where('chapter', 2)->where('course', 'Business Continuity & Disaster Recovery')->get();
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
        $pdfForEachChapter = App\Models\PdfFile::where('category', 'Exercise Module')->where('chapter', 2)->where('course', 'Business Continuity & Disaster Recovery')->get();
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
