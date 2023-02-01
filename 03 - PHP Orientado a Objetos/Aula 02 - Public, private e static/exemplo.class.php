<?php

    /* 
        Classe de exemplo
    */

    class Exemplo{
        private $var1;
        public $var2;
        public static $var3 = "Estático"; // Estático vai ser o mesmo valor para todos, não tem como deixar um valor individual diferente.

        private function metodo1(){
            echo "";
        }

        public function metodo2(){
            echo "";
        }

        public static function metodoEstatico(){
            echo "<br/>";
            echo "Método estático";
        }

        public function setVar1($var1){ // Esse $var1 NÃO é a variável $var1 acima, lá no topo da classe, é só o nome mesmo que vai ser usado na function abaixo.
            $this->var1 = $var1; // No caso, var1, que está ligado ao $this, é o $var1 da classe, o que está lá no topo. E o $var1 é o que está entre os parênteses dessa função aqui, o da linha acima.
        }

        public function pegaVar1(){
            return $this->var1;
        }
    }

?>