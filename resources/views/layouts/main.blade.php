<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OpenBox CMS</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand">
                <img src="main.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                OpenBox CMS
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login-page') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register-page') }}">Register</a>
                </li>
            </ul>
        </nav>
        <main class="container">
            @yield('content')
        </main>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
