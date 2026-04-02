<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Car Sales - @yield('title')</title>
    <!--<link rel="stylesheet" href="styles.css">-->
    

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

    <!-- Products Header -->
    <section class="page-header">
        <div class="container">
            <h1>@yield('page-header-title')</h1>
            <p>@yield('page-header-text')</p>
        </div>
    </section>

    <div class="container mt-5">
        @include('include.message')
    </div>

    @yield('content')

    

    <!-- Footer -->
    <footer class="footer">
        @yield('footer')
    </footer>

    <!--<script src="script.js"></script>-->
    <script>
        /*{!! Vite::content('resources/js/app.js') !!}*/
    </script>
</body>
</html>

