<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizResult;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        return view('start');
    }

    public function startQuiz(Request $request) {
        $request->validate([
            'name' => 'required',
            'institution' => 'required',
            'category' => 'required',
        ]);

        session([
            'name' => $request->name,
            'institution' => $request->institution,
            'category' => $request->category,
        ]);

        return redirect()->route('quizPage');
    }

    public function quizPage() {
        $questions = Question::where('category', session('category'))->limit(5)->get();
        return view('quiz', compact('questions'));
    }
    
    public function submitQuiz(Request $request) {
        $questions = Question::where('category', session('category'))->limit(5)->get();
        $correctCount = 0;
        $wrongCount = 0;
        $answers = [];
    
        foreach ($questions as $question) {
            $userAnswer = $request->input('answer_' . $question->id);
            $isCorrect = $userAnswer === $question->correct_answer;
            
            if ($isCorrect) {
                $correctCount++;
            } else {
                $wrongCount++;
            }
    
            $answers[] = [
                'question' => $question->question,
                'user_answer' => $userAnswer,
                'correct_answer' => $question->correct_answer,
                'reading_material' => $question->reading_material
            ];
        }
    
        // Simpan data ke database
        QuizResult::create([
            'name' => session('name'),
            'institution' => session('institution'),
            'score' => $correctCount
        ]);
    
        return view('result', compact('correctCount', 'wrongCount', 'answers'));
    }
}
