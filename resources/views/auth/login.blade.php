@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">
                Email
                <input type="email" class="form-control" name="email" placeholder="Email">
            </label>
        </div>
        <div class="form-group">
            <label for="password">
                Password
                <input type="password" class="form-control" name="password" placeholder="Password">
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Login</button>
        </div>
    </form>
@endsection
