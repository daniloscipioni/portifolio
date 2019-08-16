<!doctype html>
<html lang="en">

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/portifolio.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/portifolio.js"></script>
    <title>Danilo Scipioni - Portifólio</title>
</head>

<body>

    <div class="nav-toggle">
        <div class="nav-toggle-bar"></div>
    </div>

    <nav class="nav">
        <div class="circle"></div>
        <ul>
            <li><a href="about">Sobre Mim</a></li>
            <li><a href="projects">Projetos</a></li>
            <li><a href="contacts">Contato</a></li>
            <li><a href="more">Mais Funções</a></li>
        </ul>
    </nav>

    @yield('content')

</body>
<script src="js/nav.js"></script>

</html>