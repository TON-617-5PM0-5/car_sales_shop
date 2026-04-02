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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Ласкаво просимо до Premium Sales</h1>
            <p>Відкрийте для себе якісні автомобілі за неперевершеними цінами</p>
            <a href="products.html" class="btn btn-primary">Переглянути автомобілі</a>
        </div>
    </section>

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

