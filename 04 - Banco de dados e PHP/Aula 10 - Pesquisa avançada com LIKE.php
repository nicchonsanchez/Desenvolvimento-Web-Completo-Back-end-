<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Por padrão, caso haja um erro no PDO, ele não mostra qual é, com isto ele passará a mostrar.

    $sql = $pdo->prepare('SELECT * FROM pessoas WHERE nome LIKE "%l%"'); // O % funciona que nem no sistema NetI da Metalsider, é como um coginga, se começar com % é porque pode começar de qualquer jeito, não necessáriamente com a letra´/palavra que vier em seguida; quando termina com % é porque pode terminar de qualquer jeito; se tiver no inicio e no final é porque não precisa começar nem terminar com o conteúdo inserido, precisa apenas conter o conteúdo em qualquer parte.
    // Neste caso em específico, está procurando pelos nomes que CONTENHAM L, independentemente de começar com L ou terminar com L, só é preciso que o contenha.

    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<h2 style="color:red; font-family:Arial;">NOMES QUE CONTEM A LETRA "L"</h2>';
    echo '<pre style="color: black;font-family:Arial; font-weight:bold;">';
    print_r($nomes);
    echo '</pre>';

    echo '<br/>';
    echo '<hr/>';

    $sql = $pdo->prepare('SELECT * FROM pessoas WHERE nome LIKE "l%"');
    // Neste caso, está procurando pelos nomes que COMECE L

    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<h2 style="color:red; font-family:Arial;">NOMES QUE COMEÇAM COM A LETRA "L"</h2>';
    echo '<pre style="color: black;font-family:Arial; font-weight:bold;">';
    print_r($nomes);
    echo '</pre>';

    echo '<br/>';
    echo '<hr/>';
    
?>