<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\BcdrCourseController;
use App\Http\Controllers\RiskCourseController;
use App\Http\Controllers\AuditCourseController;

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\Mis2Controller;
use App\Http\Controllers\Mis3Controller;
use App\Http\Controllers\Mis4Controller;
use App\Http\Controllers\Mis5Controller;

use App\Http\Controllers\BcdrChapterController;
use App\Http\Controllers\Bcdr2Controller;
use App\Http\Controllers\Bcdr3Controller;
use App\Http\Controllers\Bcdr4Controller;
use App\Http\Controllers\Bcdr5Controller;

use App\Http\Controllers\RiskChapterController;
use App\Http\Controllers\Risk2Controller;
use App\Http\Controllers\Risk3Controller;
use App\Http\Controllers\Risk4Controller;
use App\Http\Controllers\Risk5Controller;

use App\Http\Controllers\AuditChapterController;
use App\Http\Controllers\Audit2Controller;
use App\Http\Controllers\Audit3Controller;
use App\Http\Controllers\Audit4Controller;
use App\Http\Controllers\Audit5Controller;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileFrontPageController;
use App\Http\Controllers\UserFeedbackController;
use App\Http\Controllers\PdfFileController;
use App\Http\Controllers\Admin\QuizController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BrowserHistoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('landingpage');
});*/

// Enable the built-in authentication routes, including email verification
Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::middleware(['auth', 'throttle:6,1'])->post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->name('verification.send');


Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/home', [LandingPageController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/profile', [ProfileController::class, 'index'])->name('profile.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete-user-form', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/coursepage', [CourseController::class, 'index'])->name('course.coursepage');
Route::get('/bcdrcourse', [BcdrCourseController::class, 'index'])->name('course.bcdrcoursepage');
Route::get('/riskcourse', [RiskCourseController::class, 'index'])->name('course.riskcoursepage');
Route::get('/auditcourse', [AuditCourseController::class, 'index'])->name('course.auditcoursepage');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admindash', [AdminController::class, 'index'])->name('admindashboard');

Route::get('/chapterpage', [CourseController::class, 'chapter'])->name('chapter.mischapterpage');
Route::get('/mischapter2', [CourseController::class, 'chapter2'])->name('chapter.mis2');
Route::get('/mischapter3', [CourseController::class, 'chapter3'])->name('chapter.mis3');
Route::get('/mischapter4', [CourseController::class, 'chapter4'])->name('chapter.mis4');
Route::get('/mischapter5', [CourseController::class, 'chapter5'])->name('chapter.mis5');


Route::get('/bcdrchapter', [BcdrCourseController::class, 'chapter'])->name('chapter.bcdrchapterpage');
Route::get('/bcdrchapter2', [BcdrCourseController::class, 'chapter2'])->name('chapter.bcdr2');
Route::get('/bcdrchapter3', [BcdrCourseController::class, 'chapter3'])->name('chapter.bcdr3');
Route::get('/bcdrchapter4', [BcdrCourseController::class, 'chapter4'])->name('chapter.bcdr4');
Route::get('/bcdrchapter5', [BcdrCourseController::class, 'chapter5'])->name('chapter.bcdr5');

Route::get('/riskchapter', [RiskCourseController::class, 'chapter'])->name('chapter.riskchapterpage');
Route::get('/riskchapter2', [RiskCourseController::class, 'chapter2'])->name('chapter.risk2');
Route::get('/riskchapter3', [RiskCourseController::class, 'chapter3'])->name('chapter.risk3');
Route::get('/riskchapter4', [RiskCourseController::class, 'chapter4'])->name('chapter.risk4');
Route::get('/riskchapter5', [RiskCourseController::class, 'chapter5'])->name('chapter.risk5');

Route::get('/auditchapter', [AuditCourseController::class, 'chapter'])->name('chapter.auditchapterpage');
Route::get('/auditchapter2', [AuditCourseController::class, 'chapter2'])->name('chapter.audit2');
Route::get('/auditchapter3', [AuditCourseController::class, 'chapter3'])->name('chapter.audit3');
Route::get('/auditchapter4', [AuditCourseController::class, 'chapter4'])->name('chapter.audit4');
Route::get('/auditchapter5', [AuditCourseController::class, 'chapter5'])->name('chapter.audit5');


Route::get('/article', [ArticleController::class, 'index'])->name('articlepage');
Route::get('/profile', [ProfileFrontPageController::class, 'index'])->name('profile.profilefrontpage');

//Feedback
Route::get('/feedback', [UserFeedbackController::class, 'index'])->name('feedback.userfeedback');
Route::post('/feedback', [UserFeedbackController::class, 'store'])->name('feedback.store');
Route::get('/admin/feedback', [UserFeedbackController::class, 'index'])->name('admin.feedback.index')->middleware('auth:admin');

Route::get('/get-file', [ChapterController::class, 'getFile'])->name('get-file');

Route::get('/view-pdf/{filename}', function ($filename) {
    $filePath = storage_path('app/public/upload_pdfs/' . $filename);
    if (!Storage::disk('public')->exists('upload_pdfs/' . $filename)) {
        abort(404);
    }
    return response()->file($filePath);
})->name('view-pdf');


Route::get('/uploadfile', [UploadFileController::class, 'upload'])->name('uploadfile');
Route::post('/uploadfile', [UploadFileController::class, 'uploadPost'])->name('uploadfile.post');

//Authencation
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/submit-register', [AuthController::class, 'submitRegister'])->name('submit-register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/submit-login', [AuthController::class, 'submitLogin'])->name('submit-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Forgot password
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/reset-password-email', [AuthController::class, 'forgotPasswordEmail'])->name('reset-password-email');
Route::get('/reset-password/{md5email}', [AuthController::class, 'resetPassword'])->name('reset-password');
Route::post('/reset-password-update', [AuthController::class, 'resetPasswordUpdate'])->name('reset-password-update');

Route::post('/browser-history/store', [BrowserHistoryController::class, 'store']);

//admin

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('quizzes/create', [QuizController::class, 'createQuiz'])->name('quizzes.create');
    Route::post('quizzes', [QuizController::class, 'storeQuiz'])->name('quizzes.store');
    Route::get('quizzes/{quiz}/questions/create', [QuizController::class, 'createQuestion'])->name('questions.create');
    Route::post('questions', [QuizController::class, 'storeQuestion'])->name('questions.store');
    Route::put('/quizzes/{quiz}/status', [QuizController::class, 'updateStatus'])->name('quizzes.updateStatus');
    Route::delete('/quizzes/delete{id}', [QuizController::class, 'destroy'])->name('quizzes.delete');
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizController::class, 'submitEdit'])->name('quizzes.update');

    // Handle upload files
    Route::get('upload-files', [PdfFileController::class, 'index'])->name('uploadFiles.index');
    Route::resource('pdf_files', PdfFileController::class);
    Route::delete('/pdf_files/delete/{id}', [PdfFileController::class, 'destroy'])->name('pdf_files.delete');
    // Route::post('/pdf_files/delete', [PdfFileController::class, 'destroy'])->name('pdf_files.delete2');

    //feedbacks
    Route::get('admin/feedbacks', [UserFeedbackController::class, 'view'])->name('feedbacks.view');
    Route::delete('/feedback/delete{id}', [UserFeedbackController::class, 'destroy'])->name('feedbacks.delete');


});

Route::get('{courseName}/quizzes/{id}', [QuizController::class, 'view'])->name('quizzes.view');
Route::post('{courseName}/quizzes/{id}/submit', [QuizController::class, 'submitQuiz'])->name('submit-quiz');

// Enable the built-in authentication routes, including email verification
Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::middleware(['auth', 'throttle:6,1'])->post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->name('verification.send');



// Route::view('/login', 'login');



//require __DIR__.'/auth.php';
