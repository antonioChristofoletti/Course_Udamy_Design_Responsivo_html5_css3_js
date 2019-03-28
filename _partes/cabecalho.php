<!DOCTYPE HTML>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
        $titulo = "Design Responsivo";
        global $titulo;
        if($titulo != "")
            $titulo .= " | " . $tituloPagina;
    ?>

    <title><?php echo $titulo ?></title>

    <link rel="stylesheet" type="text/css" href="sass/style.css">

    <link rel="shortchut icon" type="image/x-icon" href="_img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="_css/_fancybox3/jquery.fancybox.min.css">
</head>

<body>
    <header class="cabecalho">
        <div class="container">
            <?php if($tituloPagina == "Principal"): ?>
                <h1 class="logo">Design Responsivo</h1>
            <?php else: ?>
                <a href="index.php" class="logo">Design Responsivo</a>
            <?php endif; ?>
            
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/Fechar menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $tituloPagina == "Principal" ? "menu-principal__item--atual" : ""  ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == "Sobre" ? "menu-principal__item--atual" : ""  ?>" href="sobre.php">Sobre Nós</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == "Portfolio" ? "menu-principal__item--atual" : ""  ?>" href="portfolio.php">Portfolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == "Contato" ? "menu-principal__item--atual" : ""  ?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>