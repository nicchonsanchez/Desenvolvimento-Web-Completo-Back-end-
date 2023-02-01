<?php

    $nome = "Nick";

    // Switch funciona tipo o if. Case vai ser o "caso for X vai fazer isso", e break é para finalizar a ação.
    switch($nome) {
        case 'Nicchon':
            echo "É o nome";
            break;
        
        case 'Nick':
            echo "É o apelido";
            break;
    }

    echo "<hr/>";

    // Break também serve para interromper um Loop: for, while, do, foreach...
    for($i=0; $i < 10; $i++){
        echo $i;
        echo "<hr/>";

        if($i==5)
            break;
    }

    echo "<hr/>";

    // Continue dá seguimento ao loop pulando a esetapa em específico.
    for($i=0; $i < 10; $i++){
        if($i==5)
            continue;

        echo $i;
        echo "<hr/>";
    }

    echo "<hr/>";

    // Quando tiver apenas uma linha de código no IF, não é necessário usar chaves {}.
    $idade = 21;

    if($idade == 21)
        echo "idade confirmada, é 21.";
        echo "OI"; // Este não faz parte da confição do IF acima porque já é a segunda linha. É apenas mais uma linha do código.

?>