<?php

    for($contador = 0; $contador < 10; $contador++){
        echo "HEEEYYY";
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    for($contador = 10; $contador > 0; $contador--){
        echo "Olllááá";
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    $contador = 0;
    while($contador<10){
        echo "Eeaaeee";
        echo "<br/>";
        echo $contador;
        echo "<hr/>";
        $contador+=1; // $contador++ ou $contador+=1 é a mesma coisa, $contador+=2 soma de 2 em 2, $contador+=3 soma de 3 em 3, e assim por diante...
    }

    echo "<br/>";
    echo "<br/>";

    $contador = 11;
    do{
        echo "TESTEEEE";
        echo "<br/>";
    }while($contador == 10); //vai fazer a primeira vez, mas quando ver que o resquisito para dar loop é ser igual à 10 ele não vai repetir mais

    echo "<br/>";
    echo "<br/>";

    $contador = 0;
    do{
        echo "TESTEEEE 2";
        echo "<br/>";
        $contador++;
    }while($contador < 10);

?>