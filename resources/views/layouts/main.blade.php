<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">


        <script src="/js/scripts.js"></script>
    </head>
    <body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbar">
    <a href="/" class="navbar-brand">
    <img src="/img/logomarca.svg" alt="logo marca">
</a>

<ul class="navbar-nav"></ul>
 <li class="nav-item"></li>
   <a href="/" class="nav-link">Eventos</a>
 </li>
   <a href="/eventos/create" class="nav-link">Criar Eventos</a>
 </li>
    <a href="/" class="nav-link">Entrar</a>
 </li>
    <a href="/" class="nav-link">Cadastrar</a>
 </li>
</ul>
</div>
</nav>
</header>


@yield('content')
    <footer>
        Macc Eventos &copy; 2022
    </footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
