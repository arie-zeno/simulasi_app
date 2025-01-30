@extends('admin.layout')

@section('content')
    <h2>Daftar Soal</h2>
    <a href="create" class="btn btn-primary mb-3">Tambah Soal</a>

    <table class="table">
        <thead>
            <tr>
                <th>Soal</th>
                <th>Opsi A</th>
                <th>Opsi B</th>
                <th>Opsi C</th>
                <th>Opsi D</th>
                <th>Jawaban Benar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
            <?php
            $options = explode(',' ,$question['options']);
            
            ?>
            <tr>
                <td>{{ $question->question }}</td>
                @foreach(json_decode($question['options']) as $options)
                
                <td>{{ $options }}</td>
    
                @endforeach
                <td>{{ $question->correct_answer }}</td>
                <td>
                    <a href="/admin/questions/{{$question->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="admin/questions/destroy" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
