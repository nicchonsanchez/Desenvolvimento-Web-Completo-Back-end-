<?php

    $var = array('Nome'=>'Nicchon', '21 anos', "27/12/2000", "Teste");
    
    foreach($var as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';
    }
    
    echo "<br/>";
    echo "<br/>";
    
    $total = count($var);
    for($i=0; $i < $total; $i++) { // No caso do for, ele irá procurar pelas variáveis em que o key seja um número, o key de Nicchon é 'Nome',
        echo $var[$i];             // logo não aparecerá, mas será contado, então procurarão pelo 4 que não está definido, logo aparecerá uma mensagem de erro.
        echo '<br/>';
    }
    

?>