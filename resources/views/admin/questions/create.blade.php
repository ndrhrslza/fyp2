@extends('navbar.dashboardleftbar')
@section('content')

<div class="wrapper d-flex align-items-stretch justify-content-center">
    <div id="content" class="p-4 p-md-5 pt-5" style="min-width: 100%;">
        <div class="container">
            <div style="width: 100%; display: flex; justify-content: space-between;">
                <div>
                    <h1>Questions for {{ $quiz->title }}</h1>
                </div>
                <div>
                    <!-- <a href="javascript:history.back()" class="btn btn-secondary mb-3">BACK</a> -->
                </div>
            </div>
            <form class="row g-3" action="{{ route('questions.store') }}" method="POST">
                @csrf
                <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

                <div id="questionContainer">
                    <div class="card mb-3 question-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h5 class="card-title question-number">Question 1</h5>
                                    <label for="question_text" class="form-label">Question Text*</label>
                                    <textarea class="form-control" id="question_text" name="question_text[]" rows="3" required></textarea>
                                </div>

                                <div class="col-md-12 mb-3 options-container">
                                    <div class="option-group">
                                        <label for="option_1" class="form-label">Option (A)*</label>
                                        <input type="text" class="form-control option-input" id="option_1" name="options[1][]" required>
                                        <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                    </div>
                                    <div class="option-group">
                                        <label for="option_2" class="form-label">Option (B)*</label>
                                        <input type="text" class="form-control option-input" id="option_2" name="options[1][]" required>
                                        <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                    </div>
                                    <div class="option-group">
                                        <label for="option_3" class="form-label">Option (C)*</label>
                                        <input type="text" class="form-control option-input" id="option_3" name="options[1][]" required>
                                        <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                    </div>
                                    <div class="option-group">
                                        <label for="option_4" class="form-label">Option (D)*</label>
                                        <input type="text" class="form-control option-input" id="option_4" name="options[1][]" required>
                                        <!-- <button class="btn btn-danger remove-option" type="button">Remove Option</button> -->
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="correct_answer" class="form-label">Correct Answer*</label>
                                    <select id="correct_answer" name="correct_answer[]" class="form-select" required>
                                        <option selected disabled>Choose correct answer</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="marks" class="form-label">Marks*</label>
                                    <input type="number" class="form-control" id="marks" name="marks[]" required>
                                </div>
                                <!-- <div class="col-12 text-left">
                                    <button class="btn btn-dark add-option" type="button">
                                        <i class="bi bi-plus-square-dotted"></i> Add Option
                                    </button>
                                </div> -->
                                <!-- <div class="col-12 text-center">
                                    <button class="btn btn-danger removeQuestion" type="button">
                                        <i class="bi bi-trash"></i> Delete Question
                                    </button>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button id="addQuestion" type="button" class="btn btn-dark w-100 p-3">
                        <span class="bi bi-plus-square-dotted"></span> ADD NEW QUESTION
                    </button>
                </div>
                <div class="text-center mt-3 w-100">
                    <button type="submit" class="btn btn-secondary w-100 p-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        let questionCount = 1;

        $('#addQuestion').click(function() {
            questionCount++;
            var questionHTML = `
                <div class="card mb-3 question-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h5 class="card-title question-number">Question ${questionCount}</h5>
                                <label for="question_text" class="form-label">Question Text*</label>
                                <textarea class="form-control" id="question_text" name="question_text[]" rows="3" required></textarea>
                            </div>
                            
                            <div class="col-md-12 mb-3 options-container">
                                <div class="option-group">
                                    <label  for="option_1" class="form-label">Option (A)*</label>
                                    <input type="text" class="form-control option-input" id="option_1" name="options[${questionCount}][]" required>
                                    <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                </div>
                                <div class="option-group">
                                    <label  for="option_2" class="form-label">Option (B)*</label>
                                    <input type="text" class="form-control option-input" id="option_2" name="options[${questionCount}][]" required>
                                    <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                </div>
                                <div class="option-group">
                                    <label  for="option_3" class="form-label">Option (C)*</label>
                                    <input type="text" class="form-control option-input" id="option_3" name="options[${questionCount}][]" required>
                                    <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                </div>
                                <div class="option-group">
                                    <label  for="option_4" class="form-label">Option (D)*</label>
                                    <input type="text" class="form-control option-input" id="option_4" name="options[${questionCount}][]" required>
                                    <!-- <button class="btn btn-danger remove-option  " type="button">Remove Option</button> -->
                                </div>
                            </div>
                            <!-- <div class="col-12 text-left">
                                <button class="btn btn-dark add-option" type="button">
                                    <i class="bi bi-plus-square-dotted"></i> Add Option
                                </button>
                            </div> -->
                            <div class="col-md-6 mb-3">
                                <label for="correct_answer" class="form-label">Correct Answer*</label>
                                <select id="correct_answer" name="correct_answer[]" class="form-select" required>
                                    <option selected disabled>Choose correct answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="marks" class="form-label">Marks*</label>
                                <input type="number" class="form-control" id="marks" name="marks[]" required>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-danger removeQuestion" type="button">
                                    <i class="bi bi-trash"></i> Delete Question
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            $('#questionContainer').append(questionHTML);
            updateQuestionNumbers();
        });

        $("body").on("click", ".removeQuestion", function() {
            $(this).closest('.question-card').remove();
            updateQuestionNumbers();
        });

        $("body").on("click", ".add-option", function() {
            let questionCard = $(this).closest('.question-card');
            let optionCount = questionCard.find('.option-group').length + 1;
            let optionLabel = String.fromCharCode(64 + optionCount); // Convert number to letter (A, B, C, ...)
            var optionHTML = `
                <div class="option-group">
                    <label  for="option_${optionCount}" class="form-label">Option (${optionLabel})*</label>
                    <input type="text" class="form-control option-input" id="option_${optionCount}" name="option_${optionCount}[]" required>
                    <button class="btn btn-danger remove-option  " type="button">Remove Option</button>
                </div>
            `;
            questionCard.find('.options-container').append(optionHTML);
            updateCorrectAnswerSelect(questionCard);
        });

        $("body").on("click", ".remove-option", function() {
            let questionCard = $(this).closest('.question-card');
            $(this).closest('.option-group').remove();
            updateCorrectAnswerSelect(questionCard);
        });

        function updateQuestionNumbers() {
            $('#questionContainer .question-card').each(function(index) {
                $(this).find('.question-number').text(`Question ${index + 1}`);
            });
        }

        function updateCorrectAnswerSelect(questionCard) {
            let options = questionCard.find('.option-group').length;
            let correctAnswerSelect = questionCard.find('#correct_answer');
            correctAnswerSelect.empty();
            correctAnswerSelect.append('<option selected disabled>Choose correct answer</option>');
            for (let i = 0; i < options; i++) {
                let optionLabel = String.fromCharCode(65 + i); // Convert number to letter (A, B, C, ...)
                correctAnswerSelect.append(`<option value="${optionLabel}">${optionLabel}</option>`);
            }
        }
    });
</script>

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