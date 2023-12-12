<?php 

    class Pessoa {

        public $nome = "André";
        public $idade = 19;

        function andar($nome ,$m){
            echo "O $nome andou $m metros. <br>";
        }
        
    }

    $nomePessoa = new Pessoa;

    $nomePessoa->nome = "André";
    $nomePessoa->idade;

    echo "O nome dele é $nomePessoa->nome e a sua idade é $nomePessoa->idade. <br>";

    $nomePessoa->andar($nomePessoa->nome, 8);