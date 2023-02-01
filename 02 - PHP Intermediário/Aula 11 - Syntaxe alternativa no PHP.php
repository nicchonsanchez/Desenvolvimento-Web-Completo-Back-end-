<?php

    /* 
        Invés de usar chaves {} para delimitar a função, usar : para iniciar e end+nomeDaFunção - ex: endif, endwhile... - para termiinar. Tipo os exemploes abaixo.
    */

    $var1 = "Teste";
    if($var1 == "Teste"):
        echo "TESTE IF <br/>";
    endif;

    $contador = 0;
    while($contador<10):
        $contador++;
        echo "$contador<hr/>";
    endwhile;

    $arr = ['Nick', 'Juh', 'Hugo', 'Naty', 'Duda'];
    foreach($arr as $key => $value):
        // Aplicação...
        echo $value;
        echo "<br/>";
    endforeach;

    for($i=0; $i<5; $i++):
        echo ".";
    endfor;

?>