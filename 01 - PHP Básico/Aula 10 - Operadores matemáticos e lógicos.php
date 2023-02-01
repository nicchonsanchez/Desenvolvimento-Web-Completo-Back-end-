<?php

    $num1 = 10;
    $num2 = 12;

    if($num1 < $num2){ // É menor
        echo "É menor";
    }

    echo '<br/>';

    if($num1 <= $num2){ // É menor ou igual
        echo "É menor ou igual";
    }

    echo '<br/>';

    if($num1 > $num2){ // É maior
        echo "É maior";
    }

    echo '<br/>';
    
    if($num1 >= $num2){ // É maior ou igual
        echo "É maior ou igual";
    }

?>
<br/>
<?php

    $var1 = "Nick";
    $var2 = "Nick";
    $var3 = "Hugo";
    $var4 = "Juh";

    if(($var1 == $var2) && ($var3 != $var1)){ // O sinal && serve para acrescentar outras condições no mesmo IF
        echo "Tá certo";
    }

    if(($var1 != $var2 || $var1 != $var3) && ($var1 == $var2)){
        echo "Segundo teste deu certo tbm";
    }
?>