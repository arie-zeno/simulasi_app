@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow p-4">
        <h2 class="text-center">Hasil Kuis</h2>
        <p><strong>Jawaban Benar:</strong> {{ $correctCount }}</p>
        <p><strong>Jawaban Salah:</strong> {{ $wrongCount }}</p>

        <h4>Pembahasan Soal</h4>
        @foreach ($answers as $index => $answer)
            <div class="card shadow p-3 mt-3">
                <p><strong>{{ $index + 1 }}. {{ $answer['question'] }}</strong></p>
                <p><strong>Jawaban Anda:</strong> {{ $answer['user_answer'] ?? 'Tidak Dijawab' }}</p>
                <p><strong>Jawaban Benar:</strong> {{ $answer['correct_answer'] }}</p>
                <p><strong>Pembahasan:</strong> {{ $answer['reading_material'] }}</p>
            </div>
        @endforeach

        <a href="{{ route('home') }}" class="btn btn-primary mt-3">Kembali ke Halaman Utama</a>
    </div>
</div>
@endsection
