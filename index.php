<?php 
    global $tituloPagina;
    $tituloPagina = "Principal";

    include('_partes/cabecalho.php'); 
?>

<main>
    <header class="cabecalho-home">
        <h2 class="cabecalho-home__titulo">Texto Grande Aqui!</h2>
        <p class="cabecalho-home__subtitulo">Texto menorzinho aqui</p>
        <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
    </header>

    <section id="servicos" class="servicos">
        <!-- Seção Serviços -->

        <div class="container">
            <h2 class="home__titulo">O que fazemos</h2>

            <section class="servicos__item">
                <img src="_img/icone-desenvolvimento-web.png" alt="icone planeta terra">
                <h3>Desenvolvimento web</h3>
                <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex perspiciatis
                    eos placeat quae
                    necessitatibus, similique, hic repellat sequi ad nostrum tenetur magnam! Facere sint unde</p>
            </section>

            <section class="servicos__item">
                <img src="_img/icone-carrinho-compras.png" alt="icone carrinho de compras">
                <h3>E-commerce</h3>
                <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
                    accusantium dolores quisquam
                    aperiam repudiandae nesciunt iure temporibus! Voluptatum, rem quidem iste incidunt</p>
            </section>

            <section class="servicos__item">
                <img src="_img/icone-cafe.png" alt="Icone xicara de café">
                <h3>Café</h3>
                <p class="servicos__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    dolores necessitatibus dolore
                    laboriosam vero itaque nam facere praesentium, illo, dicta corporis delectus</p>
            </section>
        </div>
    </section> <!-- FIm da Seção de Serviços -->

    <section class="depoimentos">
        <!-- Seção Depoimentos -->
        <div class="container">
            <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
            <div class="depoimentos__caixa">
                <section class="depoimentos__item">
                    <img class="depoimentos__img" src="_img/depoimentos/pessoa-1.jpg" alt="Foto da pessoa X">
                    <p class="text-center depoimentos__texto">Phassellus dapibus sapien et est blandit, ornare interdum
                        arcu
                        iaculis Vestibulum placerat ex sit
                        amet erat mattis bibendum. Mauris non mi Augue.</p>
                    <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
                </section>
                <section class="depoimentos__item">
                    <img class="depoimentos__img" src="_img/depoimentos/pessoa-1.jpg" alt="Foto da pessoa X">
                    <p class="text-center depoimentos__texto">Phassellus dapibus sapien et est blandit, ornare interdum
                        arcu
                        iaculis Vestibulum placerat ex sit
                        amet erat mattis bibendum. Mauris non mi Augue.</p>
                    <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
                </section>
            </div>
        </div>
    </section>

</main>

<?php include('_partes/rodape.php'); ?>