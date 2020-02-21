@extends('layouts.main')

@section('content')
    <div class="row h-75 pt-5 justify-content-center align-items-center">
        <form class="card" style="width: 20rem" action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}
            <h5 class="card-header">Registration</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">
                        Nick name
                    </label>
                    <input type="text" placeholder="Name" name="user_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="firstName">
                        First name
                    </label>
                    <input type="text" placeholder="First name" name="first_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="lastName">
                        Last name
                    </label>
                    <input type="text" placeholder="Last name" name="last_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">
                        Email
                    </label>
                    <input type="email" placeholder="Email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>
                    <input type="password" placeholder="Password" name="password" class="form-control" />
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" style="width: 100%" class="btn btn-dark">Register</button>
            </div>
        </form>
    </div>
@endsection
