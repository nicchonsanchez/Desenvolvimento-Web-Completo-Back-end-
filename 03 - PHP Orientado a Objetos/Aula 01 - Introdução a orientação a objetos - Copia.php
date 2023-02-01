<?php

    /* 
        Site para ver orientação a objetos: php.net/manual/pt_BR/language.oop5.php
    */

    class Pessoa{
        private $nome = 'Nicchon';
        private $idade = 21;
        private $peso = "55kg";

        public function crescer(){ // Public pode ser chamado fora do objeto pelo echo, pode ser visto
            echo 'Estou crescendo';
            echo '<br/>';
            $this->comer(); // Por mais que comer seja privado (veja abaixo), como ele está sendo chamado dentro da função crescer, que é public, ele pode ser mostrado.
        }

        private function comer(){ // Private não pode ser chamado fora da objeto pelo echo
            echo 'Estou comendo';
        }
    }

    // Instanciar = Criar um novo objeto
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa1->crescer(); // Está chamando a função de dentro do objeto

?>