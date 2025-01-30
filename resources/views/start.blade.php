@extends('layouts.app')

@section('content')
<div class="container col-sm-5">
    <div class="card shadow p-4">
        <h2 class="text-center">Selamat Datang
            </h2>
            <p class="text-center">Silakan mulai dengan memasukkan nama lengkap dan asal sekolah/intansi </p>
        <form action="{{ route('startQuiz') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Asal Instansi:</label>
                <input type="text" name="institution" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilih Jenis Soal:</label>
                <select name="category" class="form-select" required>
                    <option value="Kebahasaan">Kebahasaan</option>
                    <option value="Matematika">Matematika</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Mulai</button>
        </form>
    </div>
</div>
@endsection
