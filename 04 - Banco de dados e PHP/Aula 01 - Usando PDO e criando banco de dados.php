<?php

    // PDO é a classe nativa do PHP que é usada para gerenciar banco de dados.

    // O parâmetro para usar é o PDO('myslq:host=[nome do host];dbname=[nome do banco de dados]','[login do banco de dados]','[senha]');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

?>