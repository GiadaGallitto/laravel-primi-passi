<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Laravel-Primi-Passi</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <header class="container text-center mt-5">
            <h1 class="fw-bold">Welcome to Shop</h1>
            <h5>Press "Home" to return on HomePage</h5>
            <nav class="w-25 mt-4 bg-danger rounded-3 m-auto">
                <ul class="w-100 py-3 list-unstyled d-flex justify-content-center align-items-center">
                    <li><a href="/" class="text-decoration-none text-white">Home</a></li>
                </ul>
            </nav>
        </header>

        <main class="container text-center mt-5">
            <h3>
                Here you can buy all our best and unbeatable products, spend your money wisely...
            </h3>
        </main>
    </body>
</html>
