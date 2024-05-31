@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upload PDF</h1>
    <form method="POST" action="{{ route('pdf_files.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="pdf">PDF File</label>
            <input type="file" class="form-control" id="pdf" name="pdf" required>
        </div>
        <div class="form-group">
            <label for="chapter">Chapter</label>
            <input type="text" class="form-control" id="chapter" name="chapter" required>
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" class="form-control" id="course" name="course" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
