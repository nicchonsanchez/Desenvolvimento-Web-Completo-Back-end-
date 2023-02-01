<?php

    $nome = "Nicchon";
    $idade = 21;

    echo 'Meu nome é '.$nome; // Usando aspas simples é necessário fechar aspas, colocar o ponto e a string.
    echo "<br/>";
    echo "Meu nome é $nome"; // No caso das aspas duplas pode ser incluido a variável dentro das aspas, sem precisar colocar o ponto de contatenação.

    echo "<br/>";
    echo "<br/>";

    $class = 'box';
    //echo "<div class="$class">Conteúdo da DIV</div>" 
    echo "<div class=\"$class\">Conteúdo da DIV</div>" // Para uma aspas dupla não interferir na outra como ficaria no comentário assima, é possível substituir por \"$variável\"

?>