<?php

require_once("funcoes.php");

$form = isset($_GET["idade"]) && isset($_GET["peso"]) && isset($_GET["altura"]);

if($form){

    $idade = intval($_GET["idade"]);
    $peso = floatval($_GET["peso"]);
    $altura = floatval($_GET["altura"]);

    $imc = calculoIMC($peso, $altura);

}   

?>



<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visitante </title>
        <link rel="shortcut icon" href="Imagens/icon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>


    <body class="d-flex align-items-center vh-100">

        <div class="container saida-visitante d-flex flex-column align-items-center p-0">

            <div class="row saida-titulo">

                <div class="col-12 text-center">
                    <a href="index.php" style="color: white; text-decoration:none">Site de Nutrição</a>
                </div>

            </div>

            <div class="div saida-corpo p-3">

                <div class="row m-0">

                    <div class="col-3 saida-dados">
                        
                        <div class="text-center">
                            <img class="perfil" src="Imagens/perfil-visitante.png" alt="perfil-visitante">
                        </div>
                    
                        <div>
                            <h5 class="text-center py-2">Visitante</h5>
                            Idade: <b><?= $idade; ?> anos</b>
                            <br>
                            Peso: <b><?= number_format($peso, 1);?> Kg</b>
                            <br>
                            Altura: <b><?= number_format($altura, 2);?> m</b>
                        </div>  

                        <br>
                        
                        <div class="text-center">

                            <a href="index.php" >
                                <button class="botao-index">
                                    Voltar
                                </button>
                            </a>

                        </div>

                    </div>

                    <div class="col-8 caixa-visitante-resultados d-flex flex-column">

                        <ul>
                            <li>
                                O seu IMC é de <span><?= number_format($imc, 1);?></span> e está assim classificado como tendo: <span><?php classificacaoIMC($imc); ?></span>. <br><br>
                            </li>
                            <li>
                                Para a sua altura o seu peso ideal deverá ser entre <span><?= number_format(menorpeso($altura), 1);?></span>Kg e <span><?= number_format(maiorpeso($altura), 1);?></span>Kg. <br><br>
                            </li>
                            <li class="<?= ($idade >= 18) ? "d-none" : ""; ?>">
                                <span style="color: red;">ATENÇÃO:</span> Os resultados apresentados são válidos para maiores de 18 anos.
                                <br>
                                Como tem <span><?= $idade; ?></span> anos deverá procurar ajuda de um profissional.
                            </li>
                        </ul>
                        
                        <img class="caixa-visitante-tabela" src="Imagens/tabela imc.png" alt="tabela de IMC">  

                    </div>


                </div>

            </div>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>