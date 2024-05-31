@extends('navbar.dashboardleftbar')
@section('content')
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch justify-content-center">
    <div id="content" class="p-4 p-md-5 pt-5" style="width: 100%;">
        <div class="container">
            <div style="width: 100%; display: flex; justify-content: space-between;">
                <div>
                    <h1>Create Quiz</h1>
                </div>
                <div>
                    <a href="javascript:history.back()" class="btn btn-secondary mb-3">Back</a>
                </div>
            </div>
            <div class="container mt-2">
                <form action="{{ route('quizzes.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name(*)</label>
                        <select class="form-control" id="course_name" name="course_name" required>
                            <option disabled selected>Please select a course</option>
                            <option value="Management of Information Security">Management of Information Security</option>
                            <option value="Business Continuity & Disaster Recovery">Business Continuity & Disaster Recovery</option>
                            <option value="Risk Management">Risk Management</option>
                            <option value="Control & Audit of Information System">Control & Audit of Information System</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Quiz Title(*)</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Quiz Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="passing_score" class="form-label">Passing Score(*)</label>
                        <input type="number" class="form-control" id="passing_score" name="passing_score" required>
                    </div>

                    <button type="submit" class="btn btn-secondary w-100">Create Quiz</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection