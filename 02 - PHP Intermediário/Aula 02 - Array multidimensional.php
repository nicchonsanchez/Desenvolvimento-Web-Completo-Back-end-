<?php

    // ARRAYS SINGLE
    $arr = array('Nick', 'Juh', 'Hugo', 'Naty', 'Duda');

    $arr = ['Nick', 'Juh', 'Hugo', 'Naty', 'Duda'];

    $arr[0] = 'Nick';
    $arr[] = 'Juh';
    $arr[] = 'Hugo';
    $arr[] = 'Naty';
    $arr[] = 'Duda';

    // ARRAYS MULTIDIMENSIONAIS

    $arr2 = array(array('Nick', 'Juh', 'Hugo', 'Naty', 'Duda'), array(21,19,27,10,8));

    // echo $arr2[0]; // Vai dar erro, porque o $arr2[0] é outro array, então se faz necessária a especificação de qual variável desse array quer dar echo, como o ex abaixo
    echo $arr2[0][0];
    echo "<hr>";

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    $arr3 = array('Nome'=>array('Nick', 'Juh', 'Hugo', 'Naty', 'Duda'), 'Idade'=>array(21,19,27,10,8));

    echo "<br/>";
    echo "<hr/>";

    echo $arr3['Nome'][0];
    echo ': ';
    echo $arr3['Idade'][0];

    echo "<hr/>";
    
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";

?>