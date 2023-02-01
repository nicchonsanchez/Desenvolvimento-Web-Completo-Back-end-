<?php

    include('exemplo.class.php'); // Chamando o código do arquivo exemplo.class.php
    
    //Instanciar
    $exemplo = new Exemplo();

    $exemplo->var2 = 'Nick';
    //$exemplo->var1; // Vai dar erro, pq é privado
    $exemplo->var2; // Var dar certo, pq é público

    echo $exemplo->var2;
    echo "<br/>";


    // Novo objeto
    $exemplo2 = new Exemplo();
    $exemplo2->var2 = 'Hugo';

    echo $exemplo2->var2;
    echo "<br/>";

    //echo $exemplo2->var3; // Vai dar erro, pq é estático. Para chamar um estático tem que ser do modo abaixo.
    echo Exemplo::$var3; // Assim!

    echo Exemplo::metodoEstatico();

    $exemplo->setVar1 = "Teste";
    echo $exemplo->pegaVar1();

    echo "<br/>";

    $exemplo2->setVar1('Juh'); // Colocou Juh como $var1
    echo $exemplo2->pegaVar1();
    
?>