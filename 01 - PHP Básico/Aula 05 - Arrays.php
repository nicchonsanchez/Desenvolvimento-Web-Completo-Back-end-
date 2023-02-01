<?php

    $nome = array('Nicchon', 'Juliana', 'Hugo', 'Natália', 'Maria Eduarda', 'José', 'Magda');

    $idade[] = 21;
    $idade[] = 19;
    $idade[] = 27;
    $idade[] = 10;
    $idade[] = 7;
    $idade[] = 60;
    $idade[] = 50;

    $idade[4] = 8; // Para corrigir uma variável específica, basta colocar o número correspondente dentro dos colchetes

    $dados = array('Nick',21,true,'Betim');


    echo $nome[0];

    echo "<br/>";

    echo "<pre>";
    print_r($nome);
    echo "</pre>";

    echo "<pre>";
    print_r($idade);
    echo "</pre>";

?>