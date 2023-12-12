<?php 

    //Traits - permitem o reuso do código sem hierarquia de classes 

    trait Objeto {

        public function testando(){
            echo "Executando método do trait que será chamado em outra class";
        }

    }

    class Teste {

        use Objeto;

    }

    $x = new Teste;

    $x->testando();