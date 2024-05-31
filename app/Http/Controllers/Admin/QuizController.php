<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::get();
        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function createQuiz()
    {
        $courses = Course::all();
        return view('admin.quizzes.create', compact('courses'));
    }

    public function storeQuiz(Request $request)
    {
        $validatedData = $request->validate([
            'course_name' => 'required',
            'title' => 'required',
            'passing_score' => 'required|numeric',
        ]);

        $quiz = Quiz::create([
            'course_name' => $validatedData['course_name'],
            'title' => $validatedData['title'],
            'description' => $request->description,
            'passing_score' => $validatedData['passing_score'],
        ]);

        return redirect()->route('questions.create', ['quiz' => $quiz->id]);
    }


    public function createQuestion($quiz_id)
    {
        $quiz = Quiz::findOrFail($quiz_id);
        return view('admin.questions.create', compact('quiz'));
    }

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question_text.*' => 'required|string',
            'correct_answer.*' => 'required|string',
            'marks.*' => 'required|numeric',
            'options.*.*' => 'required|string',
        ]);

        $quizId = $request->input('quiz_id');
        $questionTexts = $request->input('question_text');
        $correctAnswers = $request->input('correct_answer');
        $marks = $request->input('marks');
        $options = $request->input('options');

        foreach ($questionTexts as $index => $questionText) {
            $question = new Question([
                'quiz_id' => $quizId,
                'question_text' => $questionText,
                'correct_answer' => $correctAnswers[$index],
                'marks' => $marks[$index],
            ]);

            $question->save();

            // Create options for the question
            foreach ($options[$index + 1] as $optionIndex => $optionValue) {
                $isCorrect = ($optionValue === $correctAnswers[$index]);
                Option::create([
                    'question_id' => $question->id,
                    'value' => $optionValue,
                    'is_correct' => $isCorrect,
                ]);
            }
        }

        return redirect()->route('quizzes.index')->with('status', 'Questions added successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:enabled,disabled',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->status = $request->status;
        $quiz->save();

        return redirect()->route('quizzes.index')->with('status', 'Quiz : ' . $quiz->title . ' status updated to ' . $quiz->status . ' successfully!');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();
        return redirect()->route('quizzes.index')->with('status', 'Quiz : ' . $quiz->title . ' deleted successfully.');
    }

    public function view($courseName, $id)
    {
        $urlParts = explode('/', urldecode(request()->url()));
        $courseNameFromUrl = $urlParts[count($urlParts) - 3]; // Get the second-to-last part
        $quiz = Quiz::findOrFail($id);

        $questions = Question::with('options')->where('quiz_id', $id)->get();

        // Fetch all quizzes related to the provided course name
        $quizzes = Quiz::where('course_name', $courseNameFromUrl)
            ->where('status', 'enabled')
            ->get();


        return view('quiz.view', compact('quizzes', 'quiz', 'questions', 'courseNameFromUrl'));
    }

    public function submitQuiz(Request $request)
    {
        $quizId = $request->input('quiz_id');
        $questionsAnswer = $request->input('questions');
        $selected_option = $request->input('selected_option');

        $quiz = Quiz::findOrFail($quizId);
        $questions = $quiz->questions;
        $totalQuestions = count($questions);
        $passingScore = $quiz->passing_score;

        $userScore = 0;
        $optionLetters = ['A', 'B', 'C', 'D'];
        $totalScore = 0;

        foreach ($questionsAnswer as $questionId) {
            $selectedOptionId = $selected_option[$questionId] ?? null;

            $trueAnswer = Question::select('correct_answer')
                ->where('id', $questionId)
                ->pluck('correct_answer')
                ->first();

            $markQuestion = Question::select('marks')
                ->where('id', $questionId)
                ->pluck('marks')
                ->first();

            $optionsEachQuestion = Option::where('question_id', $questionId)->get();
            foreach ($optionsEachQuestion as $index => $option) {
                if ($selectedOptionId == $option->id) {
                    if ($optionLetters[$index] === $trueAnswer) {
                        $correctIndex = $index;
                        $userScore += $markQuestion;
                    }
                }
            }
            $totalScore += $markQuestion;
        }

        $userScoreinPercentage = $userScore / $totalScore * 100;
        $userScoreInPercentage = round($userScoreinPercentage, 2);
        $isPassed = $userScoreinPercentage >= $passingScore;

        $user = Auth::user();
        $user->quizzes()->attach($quizId, ['score' => $userScoreInPercentage, 'is_passed' => $isPassed, 'created_at' => now(), 'updated_at' => now(),]);

        return redirect()->back()->with([
            'success' => 'Quiz submitted successfully.',
            'totalQuestions' => $totalQuestions,
            'userScore' => $userScore,
            'isPassed' => $isPassed,
            'passingScore' => $passingScore,
            'totalScore' => $totalScore,
            'userScoreinPercentage' => $userScoreInPercentage
        ]);
    }

    public function edit($id)
    {
        $urlParts = explode('/', urldecode(request()->url()));
        $courseNameFromUrl = $urlParts[count($urlParts) - 3]; // Get the second-to-last part
        $quiz = Quiz::findOrFail($id);

        $questions = Question::with('options')->where('quiz_id', $id)->get();

        // Fetch all quizzes related to the provided course name
        $quizzes = Quiz::where('course_name', $courseNameFromUrl)
            ->where('status', 'enabled')
            ->get();


        return view('quiz.edit', compact('quizzes', 'quiz', 'questions', 'courseNameFromUrl'));
    }

    public function submitEdit(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'question_text.*' => 'required|string',
            'option_text.*.*' => 'required|string',
            'selected_option.*' => 'required|integer',
        ]);

        $quiz->title = $request->input('title');
        $quiz->description = $request->input('description', '');
        $quiz->save();

        foreach ($request->input('question_text') as $questionId => $questionText) {
            $question = Question::findOrFail($questionId);
            $question->correct_answer = $request->input('correct_answer')[$questionId];
            $question->question_text = $questionText;
            $question->save();

            foreach ($request->input('option_text')[$questionId] as $optionId => $optionText) {
                $option = Option::findOrFail($optionId);
                $option->value = $optionText;
                $option->save();
            }
        }
        return redirect()->route('quizzes.index')->with('status', 'Quiz : '. $quiz->title .' updated successfully!');
    }
}
