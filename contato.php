<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";

    /include('_partes/cabecalho.php');

    $nome = "";
    $email = "";
    $mensagem = "";
    $erroFormulario = "";
    $sucessoFormulario = "";

    try
    {
        if(!isset($_POST["submit"]))
            return;

        echo "OIIIIIIIIIIIIIIIIIII";

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        if($nome != "" && $email != "" && $mensagem != "")
        {
            echo "OIIIIIIIIIIIIIIIIIII";

            $mensagemEmail = "nome: " . $nome . " - ";
            $mensagemEmail .= "E-mail: " . $email . " - ";
            $mensagemEmail .= "Mensagem: " . $mensagem . " - ";

            if(mail("contato@site.com.br", "Mensagem", $mensagemEmail))
            {
                $sucessoFormulario = "Mensagem enviada com sucesso";
                echo "OIIIIIIIIIIIIIIIIIII*************999999999999999";
            } 
            else
            {
                $erroFormulario = "Folha ao enviar a mensagem, tente mais tarde ou através do e-mail xxxx@xxxx.com. Erro: " + error_get_last()['message'];
                echo $erroFormulario;
            }
        }
        else
            $erroFormulario = "Por favor verifique os campos com problemas.";

    }catch(Exception $e){
        $erroFormulario = "Folha ao enviar a mensagem, tente mais tarde ou através do e-mail xxxx@xxxx.com. Exceção gerada: " + $e.getMessage();
    }
?>

<main>
    <header class="pagina-cabecalho">
        <h1 class="pagina-cabecalho__titulo">Contato</h1>
    </header>

    <section class="container pagina-conteudo">
        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat accusamus porro
            voluptas, molestiae
            quibusdam odio optio laboriosam est cum</p>

        <form action="#" class="formulario" method="post">
            <?php if($erroFormulario != ""): ?>
                <div class="formulario__erro">
                    <?php echo $erroFormulario ?>
                </div>
            <?php endif; ?>
            <div>
                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario_label" for="nome">Nome</label>
                    <br>
                    <input class="formulario__campo" type="text" name="nome" id="nome">
                </div>

                <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario_label" for="email">E-mail</label>
                    <br>
                    <input class="formulario__campo" type="email" name="email" id="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario_label" for="mensagem">Mensagem</label>
                    <br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" name="submit">

            </div>
        </form>

        <p class="text-center">Lorerum odio praesentium possimus illo ducimus omnis ut aut laborum quaerat iusto
            harum<br>
            eligendi, natus pariatur consectetur vitae?</p>
    </section>

    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5045.634269177428!2d-47.48984712350177!3d-23.011036662533986!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1546095673179"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

</main>

<?php include('_partes/rodape.php'); ?>