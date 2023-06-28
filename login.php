<?php

    require_once("Usuario.php");
    require_once("globais.php");
    require_once("funcoes.php");

    $form = isset($_POST["login"]) && isset($_POST["senha"]);

    if($form){

        $usuario_encontrado = verificarLogin($_POST["login"], $_POST["senha"]);

        if(!empty($usuario_encontrado)){

            session_start();
            $_SESSION["usuario"] = $usuario_encontrado;
            unset($_SESSION["usuario"]->senha);

            header("Location: saida_usuario.php");
            exit();

        }
        else{
            header("Location: inicio_sessao.php?login=false");
            exit();
        }
    }
    else{
        header("Location: inicio_sessao.php");
        exit();
    }

?>