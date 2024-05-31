<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RiskCourseController extends Controller
{
    protected $title = 'Risk Management';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $routeName = request()->route()->getName();
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        $browserHistoryController = new BrowserHistoryController();
        $browserHistoryController->storeBrowserHistory($routeName, $this->title);
        return view('course.riskcoursepage', compact('quizzes'));
    }

    public function chapter()
    {
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        return view('chapter.riskchapterpage', compact('quizzes'));
    }
    public function chapter2()
    {
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        return view('chapter.risk2', compact('quizzes'));
    }
    public function chapter3()
    {
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        return view('chapter.risk3', compact('quizzes'));
    }
    public function chapter4()
    {
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        return view('chapter.risk4', compact('quizzes'));
    }
    public function chapter5()
    {
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        return view('chapter.risk5', compact('quizzes'));
    }

    public function getFile()
    {
        $filePath = 'app\private\private\uploads\Week 4 - Project Initiation.pdf'; // Replace 'your_file_name.ext' with the actual file name
        $fileContents = Storage::disk('private')->get($filePath);

        return response()->make($fileContents, 200, [
            'Content-Type' => 'application/pdf',
            //'Content-Type' => Storage::mimeType($filePath),
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }
}
