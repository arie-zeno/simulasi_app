@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hasil Quiz</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Asal Instansi</th>
                <th>Skor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->institution }}</td>
                    <td>{{ $result->score }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
