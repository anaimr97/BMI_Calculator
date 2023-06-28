<?php

    function calculoIMC($peso, $altura){
        
        return $peso / (pow($altura, 2));

    };

    function classificacaoIMC($imc){
        
        if($imc <= 18.5){
            echo "Abaixo do Peso";
        }
        elseif($imc <= 24.9){
            echo "Peso Normal";
        }
        elseif($imc <= 29.9){
            echo "Sobrepeso";
        }
        elseif($imc <= 34.9){
            echo "Obesidade Grau I";
        }
        elseif($imc <= 39.9){
            echo "Obesidade Grau II";
        }
        else{
            echo "Obesidade Grau III ou Mórbida";
        }

    };

    function menorpeso($altura){

        return 18.5 * (pow($altura, 2));

    };

    function maiorpeso($altura){

        return 24.9 * (pow($altura, 2));

    };

    function verificarLogin($login, $senha){
            
        global $usuarios;

        foreach($usuarios as $u){
            if($u->login == $login && $u->senha == $senha){
                return $u;
            }
        }

        return NULL;
    }

    function existeSessao(){

        session_start();

        if(empty($_SESSION["usuario"])){
            header("Location: index.php");
            exit();
        } 

    }

    function existeSessao2(){

        session_start();

        if(!empty($_SESSION["usuario"])){
            header("Location: saida_usuario.php");
            exit();
        }
        
    }

?>