@extends('layouts.main')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">
                Nick name
                <input type="text" placeholder="Name" name="user_name" class="form-control" />
            </label>
        </div>
        <div class="form-group">
            <label for="firstName">
                First name
                <input type="text" placeholder="First name" name="first_name" class="form-control" />
            </label>
        </div>
        <div class="form-group">
            <label for="lastName">
                Last name
                <input type="text" placeholder="Last name" name="last_name" class="form-control" />
            </label>
        </div>
        <div class="form-group">
            <label for="email">
                Email
                <input type="email" placeholder="Email" name="email" class="form-control"/>
            </label>
        </div>
        <div class="form-group">
            <label for="password">
                Password
                <input type="password" placeholder="Password" name="password" class="form-control" />
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Register</button>
        </div>
    </form>
@endsection
