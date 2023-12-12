<?php 

    //Iremos usar o abstract

    abstract class Teste {

         abstract public function testandoAbstractClass();

    }

    //Se a classe abstrata tiver uma função abstrata teremos que implementá-la na classe filha 

    class implementaTeste extends Teste {
        public function testandoAbstractClass()
        {
            echo "Implementando o método abstrato na classe filha. <br>";
        }
    }
    
    $test = new implementaTeste;

    $test->testandoAbstractClass();

    //Se não usarmos um método abstrato na classe abstrata nós podemos fazer a chamada dela por classe

    abstract class Teste2 {

        public function testandoAbstract(){
            echo "Testando o método chamando-o pela classe pai abstrata";
        }
    }

    Teste2::testandoAbstract();

    /* Forma errada, abstract não pode ser instanciada 
    $test2 = new Teste2;

    $test2->testandoAbstract();
    */

