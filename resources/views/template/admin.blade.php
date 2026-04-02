<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Car Sales - @yield('title')</title>
    

    <style type="text/css">
        {!! Vite::content('resources/css/app.css') !!}
    </style>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <h1>@yield('pagename')</h1>
            </div>
           
            @yield('nav')
        </div>
    </nav>
    <div class="container mt-5">
        @include('include.message')
    </div>

    @yield('content')

    <script>
        /*{!! Vite::content('resources/js/app.js') !!}*/
    </script>
</body>
</html>

