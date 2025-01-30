<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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
// Rute untuk halaman utama (home)
Route::get('/', [QuizController::class, 'index'])->name('home');

// Rute untuk memulai quiz dan mengirimkan jawaban
Route::post('/start', [QuizController::class, 'startQuiz'])->name('startQuiz');
Route::get('/quiz', [QuizController::class, 'quizPage'])->name('quizPage');
Route::post('/submit', [QuizController::class, 'submitQuiz'])->name('submitQuiz');

// Rute untuk login admin
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Rute untuk halaman dashboard admin dan CRUD soal
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Rute untuk CRUD soal menggunakan resource controller
    // Route::resource('/questions', QuestionController::class);

    // Rute untuk melihat hasil quiz
    Route::get('/results', [AdminController::class, 'results'])->name('admin.results');
    Route::resource('/questions', QuestionController::class)->names([
        'index' => 'admin.questions.index',
        'create' => 'admin.questions.create',
        'store' => 'admin.questions.store',
        'edit' => 'admin.questions.edit',
        'update' => 'admin.questions.update',
        'destroy' => 'admin.questions.destroy',
    ]);
});