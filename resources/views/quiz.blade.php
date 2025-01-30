@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h4>Selamat Mengerjakan, <strong>{{ session('name') }}</strong> dari <strong>{{ session('institution') }}</strong></h4>
        <div class="alert alert-danger" id="timer">Waktu tersisa: <span id="countdown">300</span> detik</div>
    </div>

    <div class="row" style="background-color: white">
        <div class="col-md-6 p-3">
            <h4>Bahan Bacaan</h4>
            <p >{{ $questions[0]->reading_material }}</p>
        </div>
        <div class="col-md-6 p-3">
            <h4>Soal</h4>
            <form action="{{ route('submitQuiz') }}" method="POST">
                @csrf
                @foreach ($questions as $index => $question)
                    <p><strong>{{ $index + 1 }}. {{ $question->question }}</strong></p>
                    @foreach (json_decode($question->options) as $option)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer_{{ $question->id }}" value="{{ $option }}" required>
                            <label class="form-check-label">{{ $option }}</label>
                        </div>
                    @endforeach
                @endforeach
                <button type="submit" class="btn btn-success mt-3 w-100">Kumpulkan Jawaban</button>
            </form>
        </div>
    </div>
</div>

<script>
    let timeLeft = 300;
    setInterval(() => {
        if (timeLeft > 0) {
            document.getElementById("countdown").textContent = timeLeft--;
        } else {
            document.getElementById("timer").textContent = "Waktu Habis!";
        }
    }, 1000);
</script>
@endsection
