@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
</div>
@endsection
