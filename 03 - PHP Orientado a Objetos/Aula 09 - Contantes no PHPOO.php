<?php

    // Para criar constantes normais usa-se:
    define('NOMEDACONSTANTE', 'Valor');

    class minhaClasse{

        const CONSTANTE = 300; // Na Orientação a Objetos basta usar o const.

        public function __construct(){
            echo self::CONSTANTE; // Para chamar ela ainda dentro da classe, basta fazer assim como no ex. ao lado.
        }
    }

    //new minhaClasse;
    echo minhaClasse::CONSTANTE; // Para chamá-la fora da classe, é só digitar nomeDaClasse::NOMEDACONSTANTE
?>