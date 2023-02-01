<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare('SELECT * FROM pessoas WHERE id IN(1,3,5)'); // IN vai busca todos os valores que possuem na coluna específica o valor de dentro dos parênteses.

    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<h2>PESSOAS COM ID 1, 2 OU3</h2>';
    echo '<pre style="color: black;font-family:Arial; font-weight:bold;">';
    print_r($nomes);
    echo '</pre>';

    echo '<br/>';
    echo '<hr/>';

    $sql = $pdo->prepare('SELECT * FROM pessoas WHERE `data_nascimento` BETWEEN "1997-01-01" AND "2002-01-01"'); // BETWEEN vai busca todos os valores entre o primeiro e o segundo parâmetro.
    // Neste caso estou usando BETWEEN com datas, sendo então todas as pessoas com data de nascimento entre 01/01/1997 e 01/01/2002.

    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<h2>PESSOAS COM NASCIMENTO ENTRE 01/01/1997 E 01/01/2002</h2>';
    echo '<pre style="color: black;font-family:Arial; font-weight:bold;">';
    print_r($nomes);
    echo '</pre>';

    echo '<br/>';
    echo '<hr/>';
    
?>