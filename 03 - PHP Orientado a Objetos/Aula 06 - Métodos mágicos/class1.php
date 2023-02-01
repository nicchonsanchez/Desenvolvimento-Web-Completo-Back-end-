<?php

    class Class1 {
        private $nome;
        private $idade;

        public function __construct($nome,$idade){ // Com o construct, ao criar o objeto, será possível definir o $nome e a $idade usando parágrafo sem colocar o nome do método, como feito no index.php
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }
    }

?>