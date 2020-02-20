<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OpenBox CMS</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">
                <img src="main.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                OpenBox CMS
            </a>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
