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
            <h1 class="fw-bold">Welcome to Memes</h1>
            <h5>Press "Home" to return on HomePage</h5>
            <nav class="w-25 mt-4 bg-danger rounded-3 m-auto">
                <ul class="w-100 py-3 list-unstyled d-flex justify-content-center align-items-center">
                    <li><a href="/" class="text-decoration-none text-white">Home</a></li>
                </ul>
            </nav>
        </header>

        <main class="container text-center mt-5">
            <h3>Relax and have fun on our page dedicated to the best programmer memes, have a laugh and join us!</h3>
            <div class="w-100 mt-4 d-flex flex-wrap">
                <img class="mb-5 p-2 w-50" src="/images/laravel-meme.jpeg" alt="first meme">
                <img class="mb-5 p-2 w-50" src="/images/laravel-meme2.jpg" alt="second meme">
                <img class="mb-5 p-2 w-50" src="/images/laravel-meme3.png" alt="third meme">
                <img class="mb-5 p-2 w-50" src="/images/laravel-meme4.png" alt="fourth meme">
            </div>
        </main>
    </body>
</html>
