<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="container text-center">
        <h3>Benvenuto! Per visualizzare l'homepage del sito clicca sul link sottostante</h3>
        <a href="{{ route('comics.index') }}">Vai alla homepage</a>
    </main>

</body>

</html>