<?php

    include('header.php'); // include adiciona o código de um arquivo ao código, tipo neste exemplo que está inlcuindo o header

    /* 
        site para ver config. da função data: php.net/manual/pt_BR/function.date.php
    */
    date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/Y H:i:s');
    echo $data;

    echo "<hr/>";

    $data2 = date('d/m/Y H:i:s', time()+(60*10)); // time é dado em segundos. Colocando a vírgula e o time é possível somar tempo ao horário atual.
    echo $data2;

    include('footer.php');
?>