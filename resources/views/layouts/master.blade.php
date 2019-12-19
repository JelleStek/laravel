<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h2>
    @section('header')
        Webshop - Laravel
    @show
    </h2>
</header>

<nav>
    @section('nav')
        @show
</nav>

<main>
    @yield('content')
</main>

<footer>
    FOOTER
</footer>
</body>
</html>
