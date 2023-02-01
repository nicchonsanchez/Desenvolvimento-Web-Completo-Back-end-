<?php

    // Sleep serve pra criar uma pausa no código antes de rodar o script.
    sleep(3);
    echo 'oi';

    sleep(3);
    echo '<br/>';
    echo 'olá';

    echo '<br/>';

    $x = "MORRE";

    if($x == "eeee"){
        die("Acabou"); // Die interrompe o continuamento do código, ele se encerra. É possível colocar uma mensagem dentro dele, como no ex. ao lado.
    } else {
        echo "Eroouuu";
    }

    echo '<br/>';
    echo 'Se continuou é pq não efetuou o DIE';
?>