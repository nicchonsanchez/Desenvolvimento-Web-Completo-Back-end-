<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM `pessoas` WHERE parentesco = (SELECT id FROM parentescos WHERE parentesco /* da tabela de parentescos */ = 'Familia')"); // 
    $sql->execute();

    echo '<pre>';
    print_r($sql->fetchAll());
    echo '</pre>';
?>