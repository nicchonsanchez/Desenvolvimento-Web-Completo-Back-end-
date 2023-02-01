<?php

    /* 
        Site para ver funções para strings: php.net/manual/pt_BR/language.oop5.magic.php 
    */

    include('class1.php');

    $teste = new Class1('Nick', 21); // Aqui, para definir o $nome e a $idade, só precisei colocar entre os parênteses após o nome da classe.

    echo $teste->getNome();
    echo $teste->getIdade();
?>