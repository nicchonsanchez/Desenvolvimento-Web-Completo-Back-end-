<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');
    
    $pdo->exec("LOCK TABLES `pessoas` WRITE"); // Vai deixar a tabela bloquada por 10 segundos (por causa do sleep abaixo), impedindo que o index2.php carregue a tabela durante esse período.

    // ISTO EVITA CONFLITOS DE INFORMAÇÃO NA HORA DE INSERIR DADOS AO MESMO TEMPO NUM BANCO DE DADOS DE UM SISTEMA MAIS PESADO

    sleep(10);
?>