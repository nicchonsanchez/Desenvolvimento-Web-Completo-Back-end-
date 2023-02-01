<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    $sql = $pdo->prepare('SELECT * FROM `pessoas`');

    $sql->execute();

    $pessoas = $sql->fetchAll();

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<hr/>';
    }
?>