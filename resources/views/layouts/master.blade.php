<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="/js/nav.js"></script>
    <title>Webshop - Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/form.css"  rel="stylesheet">
</head>
<body>

<nav>
    <div class="nav">
        <div class="nav_left">
            <h1>Zonnenkill.nl</h1>
        </div>
        <div class="nav_right">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('producten')}}">Producten</a></li>
                <li><a href="{{route('product.add')}}">Producten toevoegen</a></li>

            </ul>
        </div>
    </div>
</nav>

<header>
    <h2>
    @section('header')

    @show
    </h2>
</header>


<main>
    @yield('content')
</main>

<footer>
        <br><br><br><br>
        <div class="footer_grid">
            <div class="footer_grid__content fg_1">
                <h3>Contact</h3>
                <ul>
                    <li><a href="https://www.linkedin.com/in/jelle-stekelenburg-1887ba178/">Linkedin</a></li>
                    <li><a href="mailto:contact@JelleStekelenburg.nl">Email</a></li>
                    <li><a href="https://github.com/JelleStekelenburg">Github</a></li>
                    <li><a href="https://www.instagram.com/jellestek/">Instagram</a></li>
                    <li><a href="https://jellestekelenburg.nl/contact">Mobiel</a></li>
                </ul>
            </div>
            <div class="footer_grid__content">
                <h3>Pagina's</h3>
                <ul>
                    <li><a>Home</a></li>
                    <li><a>Over mij</a></li>
                    <li><a>Portfolio</a></li>
                    <li><a>Contact</a></li>
                    <li><a>CV</a></li>
                </ul>
            </div>
            <div class="footer_grid__content fg_3">
                <h3>Informatie</h3>
                <ul>
                    <li>Jelle Stekelenburg</li>
                    <li>Contactweg 36</li>
                    <li>1014AN, Amsterdam</li>
                    <li>(+31) 06 24421363</li>
                    <li>info@JelleStekelenburg.nl</li>
                </ul>
            </div>
        </div>
        <p>Copyright © 2019 Jelle Stekelenburg</p>


</footer>
</body>
</html>
