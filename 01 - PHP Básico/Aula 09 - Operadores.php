<?php

    $num1 = 10;
    $num2 = 12;
    $num3 = '10';

    if($num1 == $num2){ // Sinal de = duas vezes é para saber se são iguais, sem levar em consideração se são tipos de variável diferentes
        echo "Tá certo";
    }

    if($num1 != $num3){ //Sinal de != é para saber se são diferentes, sem levar em consideração se são tipos de variável diferentes
        echo "Tá diferente";
    }

    if($num1 === $num2){ // Sinal de = três vezes é para saber se são iguais tanto o conteúdo quanto o tipo de variável (se é string, número, booleween, etc...)
        echo "Tá identico, tanto o número quanto o tipo de variável";
    }

    if($num1 == $num2){ // Sinal de !== é para saber se são diferentes, seja o conteúdo ou tipo de variável (se é string, número, booleween, etc...)
        echo "Tá com o conteúdo ou tipo de variável diferente";
    }

?>