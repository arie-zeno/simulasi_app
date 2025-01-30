@extends('admin.layout')

@section('content')
    <h2>Tambah Soal</h2>
    <form action="{{ route('admin.questions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="question" class="form-label">Soal</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>

        <div class="mb-3">
            <label for="option_a" class="form-label">Opsi A</label>
            <input type="text" class="form-control" id="option_a" name="option_a" required>
        </div>

        <div class="mb-3">
            <label for="option_b" class="form-label">Opsi B</label>
            <input type="text" class="form-control" id="option_b" name="option_b" required>
        </div>

        <div class="mb-3">
            <label for="option_c" class="form-label">Opsi C</label>
            <input type="text" class="form-control" id="option_c" name="option_c" required>
        </div>

        <div class="mb-3">
            <label for="option_d" class="form-label">Opsi D</label>
            <input type="text" class="form-control" id="option_d" name="option_d" required>
        </div>

        <div class="mb-3">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <input type="text" class="form-control" id="correct_answer" name="correct_answer" required>
        </div>

        <div class="mb-3">
            <label for="explanation" class="form-label">Pembahasan</label>
            <textarea class="form-control" id="explanation" name="explanation" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
