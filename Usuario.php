<?php

    class Usuario{

        public $login;
        public $senha;
        public $nome;
        public $idade;
        public $genero;
        public $peso;
        public $altura;

        function __construct($login, $senha, $nome, $idade, $genero, $peso, $altura){
            
            $this->login = $login;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->idade = $idade;
            $this->genero = $genero;
            $this->peso = $peso;
            $this->altura = $altura;
        }
    }

?>