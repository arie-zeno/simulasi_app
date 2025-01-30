<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $questionCount = Question::count();
        $userCount = QuizResult::count();
        return view('admin.dashboard', compact('questionCount', 'userCount'));
    }

    public function results()
    {
        $results = QuizResult::orderByDesc('score')->get();
        return view('admin.results', compact('results'));
    }
}
