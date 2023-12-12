<?php

    class Humano {

        public $voz = true; 
        public $nome; 

        function falar($nome){
            if($this->voz == true){
                return "$nome consegue falar.";
            }
            else {
                return "$nome não consegue falar.";
            }
        }
    }

    class Professor extends Humano {

        public $disciplina;
        public $nome;

        function lecionar($nome, $disciplina){
            return "O professor(a) $nome leciona a disciplina de $disciplina.";
        }

    }

    $Giuliano = new Humano ;


    echo $Giuliano->falar("Giuliano");
    
    echo "<br>";

    $Eder = new Professor; 

    echo $Eder->lecionar("Eder","Desenvolvimento Web");