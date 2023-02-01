<?php

    /* 
        Site para ver funções para arrays: php.net/manual/pt_BR/ref.arrays.php
    */

    $arr1 = array("chave1" => "valor1","chave2" => "valor2");
    $arr2 = array("chave3" => "valor3","chave4" => "valor4");
    $arr3 = ["chave5" => "valor5","chave1" => "valor6"];

    // Array Merge junta os arrays em sequência.
    $resultado = array_merge($arr1,$arr2,$arr3);
    echo "<pre>";
    print_r($resultado); // Como no final do $arr3 há uma repetição de uma chave já existe ele reescreve o valor da chave fazendo a chave1 ser valor 6
    echo "</pre>";

    echo "<hr/>";

    // array_intersect_key vai retornar as keys que se repetem em todos os arrays indicados.
    $resultado2 = array_intersect_key($arr1,$arr3);
    echo "<pre>";
    print_r($resultado2); // Vai retornar apenas a chave1, com o valor do primeiro array, que no caso é valor1.
    echo "</pre>";

    // array_map vai aplicar uma função em cada variável de um array.
    $arrAM = ["<h1>Nick</h1>","Sanchez","<p>Pinto</p>"];
    print_r(array_map('strip_tags',$arrAM)); // Vai dar echo sem as tags.
?>