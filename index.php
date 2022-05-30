<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Carrinho Novinho</title>
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
</head>
<body>
<header class="header">
    <a href="index.php" title="Home" class="header-logo">
        <img src="imagens/logo.png" alt="Meu Carrinho Novinho">
    </a>
    <a href="javascript:menu()" title="Menu" class="header-menu">
        <i class="fa-solid fa-bars"></i>
    </a>
    <nav class="header-nav">
        <ul class="header-ul">
            <li>
                <a href="home" title="Home">
                    <i class="fa-solid fa-house-chimney"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="quem-somos" title="Sobre">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Sobre
                </a>
            </li>
            <li>
                <a href="estoque" title="Estoque">
                    <i class="fa-solid fa-car"></i>
                    Estoque
                </a>
            </li>
            <li>
                <a href="contato" title="Contato">
                    <i class="fa-solid fa-contact-book"></i>
                    Contato
                </a>
            </li>
        </ul>
    </nav>
</header>

<main class="main container">
    <?php
    $pagina = $_GET["param"] ?? "home";
    $pagina = "pages/{$pagina}.php";
    if (file_exists($pagina))
        include $pagina;
    else
        include "pages/404.php";
    ?>
</main>

<footer class="footer">
    <p>Desenvolvildo por Aline Hardt</p>
</footer>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script>
    function menu() {
        $(".header-nav").toggle();
    }
</script>
</body>
</html>