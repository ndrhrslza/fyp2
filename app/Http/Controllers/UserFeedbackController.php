<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('feedback.userfeedback');
    }
    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|string|max:255',
        ]);

        Feedback::create([
            'user_id' => Auth::id(),
            'feedback' => $request->feedback,
        ]);

        return redirect()->back()->with('status', 'Feedback submitted successfully!');
    }

    public function view()
    {
        // $feedbacks = Feedback::all();
        $feedbacks = Feedback::with('user')->get();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function destroy($id)
    {
        $Feedback = Feedback::findOrFail($id);
        $Feedback->delete();

        return redirect()->route('feedbacks.view')->with('status', 'Feedback deleted successfully.');
    }
}
