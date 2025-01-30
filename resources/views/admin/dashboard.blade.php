@extends('admin.layout')

@section('content')
    <div class="container">
        <h2>Dashboard Admin</h2>
        <p>Total Soal: {{ $questionCount }}</p>
        <p>Total User: {{ $userCount }}</p>
    </div>
@endsection
