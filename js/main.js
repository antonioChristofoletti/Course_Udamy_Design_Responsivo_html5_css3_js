//JQuery

$(document).ready(function(){

    //Botão do menu
    $(".menu-principal__btn").click(function(){
        $(".menu-principal").toggleClass("menu-principal--fechado");
    });

    // Slide depoimentos
    $(".depoimentos__caixa").slick({
        autoplay: true,
        arrows: false,
        dots: true
    });

    //Validação do formulário de contato
    $(".formulario").validate({
        rules:{
            nome:{
                required: true
            },

            email:{
                required: true,
                email: true
            },

            mensagem:{
                required: true
            },
        },
        messages:{
            email:{
                required: "Por favor preencha o e-mail.",
                email: "Por favor preencha um e-mail válido"
            },
            
            nome:{
                required: "Por favor preencha um nome válido."
            },

            mensagem:{
                required: "Por favor preencha uma mensagem.",
            }
        }
    });
});

//Just JavaScript Code
/*let botaoResponsivoMenu = document.querySelector(".menu-principal__btn");
let menuPrincipal = document.querySelector(".menu-principal");

botaoResponsivoMenu.addEventListener("click", abrirFecharMenuResponsivo);

function abrirFecharMenuResponsivo(evento){
    menuPrincipal.classList.toggle("menu-principal--fechado");
}*/