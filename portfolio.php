<?php 
    global $tituloPagina;
    $tituloPagina = "Portfolio";

    include('_partes/cabecalho.php'); 
?>

<main>
    <header class="pagina-cabecalho">
        <h1 class="pagina-cabecalho__titulo">Porfolio</h1>
    </header>
    <section class="pagina-conteudo">
        <p class="text-center">
            Integer vulpatate vulpatate nulla, nec malesuada nibh imperdiet ut.<br>
            Nulla vulpatate pellentesque nisi, at mattis purus. Nam est elit, aliquet lacinia scelerisque a,
            viverra sed dolor.<br>
            Phasselus aliquet lectus magna. Nullam sit amet.
        </p>
        <nav>
            <ul class="lista-trabalhos">
                <li class="lista-trabalhos__item">
                    <a data-fancybox="gallery" href="_img/portfolio/gear-2291916_1280.jpg">
                        <img class="lista-trabalhos__img" src="_img/portfolio/miniaturas/gear-2291916_min.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                    </a>
                </li>

                <li class="lista-trabalhos__item">
                    <a data-fancybox="gallery" href="_img/portfolio/hong-kong-1990268_1280.jpg">
                        <img class="lista-trabalhos__img" src="_img/portfolio/miniaturas/hong-kong-1990268_min.jpg"
                            alt="">
                        <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                    </a>
                </li>

                <li class="lista-trabalhos__item">
                    <a data-fancybox="gallery" href="_img/portfolio/town-2430571_1920.jpg">
                        <img class="lista-trabalhos__img" src="_img/portfolio/miniaturas/town-2430571_min.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                    </a>
                </li>

                <li class="lista-trabalhos__item">
                    <a data-fancybox="gallery" href="_img/portfolio/landscape-2268775_1280.jpg">
                        <img class="lista-trabalhos__img" src="_img/portfolio/miniaturas/landscape-2268775_min.jpg"
                            alt="">
                        <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                    </a>
                </li>

                <li class="lista-trabalhos__item">
                    <a data-fancybox="gallery" href="_img/portfolio/aircraft-2806035_1280.jpg">
                        <img class="lista-trabalhos__img" src="_img/portfolio/miniaturas/aircraft-2806035_min.jpg"
                            alt="">
                        <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                    </a>
                </li>

                <li class="lista-trabalhos__item">
                    <a data-fancybox="gallery" href="_img/portfolio/saddle-2614038_1280.jpg">
                        <img class="lista-trabalhos__img" src="_img/portfolio/miniaturas/saddle-2614038_min.jpg"
                            alt="">
                        <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                    </a>
                </li>

            </ul>
        </nav>
    </section>
</main>

<?php include('_partes/rodape.php'); ?>