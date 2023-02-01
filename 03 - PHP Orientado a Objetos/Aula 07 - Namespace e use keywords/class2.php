<?php

    use Sessao2\Class3;
    class Class2 {
        public function __construct(){
            echo 'Classe 2';
            new Class3; // Para usar o Class3 sem colocar \Sessao2 antes, fez-se necessário usar o 'use Sessao2\Class3' antes, como na primeira linha do código.
        }
    }

?>