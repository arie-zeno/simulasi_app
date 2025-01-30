<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        return view('admin.questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_answer' => 'required',
            'reading_material' => 'required'
        ]);

        Question::create($request->all());

        return redirect()->route('questions.index')->with('success', 'Soal berhasil ditambahkan');
    }

    public function edit(Question $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return redirect()->route('questions.index')->with('success', 'Soal berhasil diperbarui');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Soal berhasil dihapus');
    }
}
