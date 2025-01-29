<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('home'); // Halaman utama
    }

    public function startQuiz()
    {
        $questions = Question::all(); // Ambil semua soal
        return view('quiz', compact('questions'));
    }

    public function submitQuiz(Request $request)
    {
        $answers = $request->input('answers'); // Jawaban user
        $questions = Question::all();

        $correct = 0;
        $wrong = 0;

        foreach ($questions as $question) {
            if (isset($answers[$question->id]) && $answers[$question->id] == $question->correct_answer) {
                $correct++;
            } else {
                $wrong++;
            }
        }

        return view('result', compact('correct', 'wrong'));
    }
}
