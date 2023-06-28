<?php

    require_once("funcoes.php");

    $form = isset($_GET["login"]);

    existeSessao2();

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de Nutrição</title>
        <link rel="shortcut icon" href="Imagens/icon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>


    <body>

        <div class="container d-flex align-items-center justify-content-center vh-100">

            <div class="row caixa-geral">

                <div class="col-7 caixa-nutricao text-uppercase d-flex align-items-center text-center">
                    Site de Nutrição
                </div>

                <div class="col-5 caixao-sessao d-flex align-items-center justify-content-center flex-column">
                    <a href="inicio_sessao.php" >
                        <button class="botao-index">
                            Iniciar Sessão
                        </button>
                    </a>

                    <br>

                    <a href="visitante.php">
                        <button class="botao-index">
                            Continuar como Visitante
                        </button>
                        
                    </a>
                </div>

            </div>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>