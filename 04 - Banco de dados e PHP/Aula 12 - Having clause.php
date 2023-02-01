<?php

    /*
        Site para mais informações: https://www.w3schools.com/sql/sql_having.asp

            Obs: Tudo que a gente quiser fazer com o HAVING é possível fazer com o WHERE
    */
    
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM `pessoas` GROUP BY `parentesco` HAVING pontos > 5"); // Vai retornar apenas os que tem pontuação acima de 5, isto é, dentre os primeiros de cada grupo, por causa do GROUP BY.
    $sql->execute();

    echo '<pre>';
    print_r($sql->fetchAll());
    echo '</pre>';
?>