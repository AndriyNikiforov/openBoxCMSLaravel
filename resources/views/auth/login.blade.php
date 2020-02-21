@extends('layouts.main')

@section('content')
    <div class="row h-75 pt-5 justify-content-center align-items-center">
        <form class="card" style="width: 20rem;" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="email">
                        Email
                    </label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button type="submit" style="width: 100%" class="btn btn-dark">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
