<?php

    abstract class Teste{ // Abstract é uma classe que só serve para ser herdada.
        public function func1(){
            echo "Chamando função 1";
        }

        abstract function func2(); // Por ser uma função abstrata, ela deve ser criada dentro da função principal para dizer o que esse método(função) vai fazer.
    }

    class Principal2 {
        public static function outroMetodoEstatico(){
            echo "Este é o outro método estático";
        }
    }

    class Principal extends Teste{
        public function func2(){
            echo "Func2";
        }

        public static function metodoEstatico(){
            echo "Método estático";
        }

        public function funcao(){
            Principal::metodoEstatico(); // Chamando o método estático acima dentro deste método (funcao).
            self::metodoEstatico(); // Porém, invés de escrever Principal, que é o nome da classe onde está o método, pode-se escrever SELF que simboliza que está dentro desta mesma classe.

            Principal2::outroMetodoEstatico(); // Como este método estático está em outra classe, NÃO se pode usar o SELF, tem que usar o nome da classe, Principal2.
        }
    }

    //$teste = new Teste; // Vai dar erro, pq Teste é classe abstrada, logo só serve para ser herdada.
    $principal = new Principal;

    $principal->func1();
    echo "<br/>";
    $principal->func2();
    echo "<br/>";echo "<br/>";

    Principal::metodoEstatico();
    echo "<br/>";
    $principal->funcao(); // Está chamando um método estático que está sendo chamado dentro de outro método da mesma classe.

?>