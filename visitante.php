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

        <div class="container geral-sessao d-flex flex-column align-items-center p-0">

            <div class="row saida-titulo">

                <div class="col-12 text-center">
                    <a href="index.php" style="color: white; text-decoration:none">Site de Nutrição</a>
                </div>

            </div>

            <div class="div saida-corpo p-3">

                <div class="row m-0">

                    <div class="col-12 caixa-visitante text-center">
                        
                        <h1>Visitante</h1>

                    </div>

                </div>

                <div class="row m-0">

                    <div class="col-12 caixa-visitante">
                        
                        <form action="saida_visitante.php" class="text-center">

                            <input type="number" name="idade" placeholder="Idade" required="required" min="0" step="1">

                            <br><br>

                            <input type="number" name="peso" placeholder="Peso" required="required" min="0" step="0.1">

                            <br><br>

                            <input type="number" name="altura" placeholder="Altura" required="required" min="0" step="0.01">

                            <br><br>

                            <input class="botao-index" type="submit" value="Calcular">

                        </form>

                    </div>
                    
                </div>

            </div>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>