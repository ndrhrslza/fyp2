@extends('navbar.dashboardleftbar')
@section('content')

<div class="wrapper d-flex align-items-stretch justify-content-center">
    <div id="content" class="p-4 p-md-5 pt-5" style="min-width: 100%;">
        <div class="container">
            <div style="width: 100%; display: flex; justify-content: space-between;">
                <div>
                    <h1>Edit Quiz: {{$courseNameFromUrl}}</h1>
                    <form class="row g-3 w-100" action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $quiz->title }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $quiz->description }}</textarea>
                        </div>
                        <!-- Add more fields for editing quiz details as needed -->

                </div>
            </div>

            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

            <div id="questionContainer">
                @foreach($questions as $question)
                <div class="card mb-3 question-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h5 class="card-title question-number">{{ $loop->iteration }}.
                                    <input type="text" name="question_text[{{ $question->id }}]" value="{{ $question->question_text }}">
                                </h5>
                                <input type="hidden" name="questions[]" value="{{ $question->id }}">
                                @foreach($question->options as $index => $option)
                                <div class="form-check">
                                    <!-- <input class="form-check-input" type="radio" name="selected_option[{{ $question->id }}]" id="option_{{ $question->id }}_{{ $index }}" value="{{ $option->id }}" {{ $option->is_correct ? 'checked' : '' }} required> -->
                                    <label class="form-check-label" for="option_{{ $question->id }}_{{ $index }}">
                                        {{ chr(65 + $index) }}.
                                        <input type="text" name="option_text[{{ $question->id }}][{{ $option->id }}]" value="{{ $option->value }}">
                                    </label>
                                </div>
                                @endforeach
                                <div class="form-group mt-3">
                                    <label for="correct_answer_{{ $question->id }}">Correct Answer</label>
                                    <select class="form-control" id="correct_answer_{{ $question->id }}" name="correct_answer[{{ $question->id }}]">
                                        @foreach($question->options as $index => $option)
                                        <option value="{{ chr(65 + $index) }}" {{ $question->correct_answer === chr(65 + $index) ? 'selected' : '' }}>
                                            {{ chr(65 + $index) }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-3 w-100">
                <button type="submit" class="btn btn-secondary w-100 p-3">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

@if(session('success'))
<!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="resultModalLabel">Quiz Result</h5>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p>Total Questions: {{ session('totalQuestions') }}</p>
                <p>Your Score: {{ session('userScore') }}/{{ session('totalScore') }} ({{ session('userScoreinPercentage') }}%)</p>
                <p>Passing Score: {{ session('passingScore') }}%</p>
                <p>Status: {!! session('isPassed') ? '<span class="text-success">Passed</span>' : '<span class="text-danger">Failed</span>' !!}</p>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="location.reload()">Try Again</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Auto-show the modal if the session variables are set -->
<script type="text/javascript">
    $(document).ready(function() {
        @if(session('totalQuestions'))
        $('#resultModal').modal('show');
        @endif
    });
</script>
@endif
@endsection

<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 0.25rem;
        padding: 1rem;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
    }

    .card-header {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    .option-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .option-group .remove-option {
        position: absolute;
        right: 0;
        top: 0;
    }
</style>