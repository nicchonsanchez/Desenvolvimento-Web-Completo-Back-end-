<?php

    function myAutoLoad($class){
        $class = str_replace('\\','/',$class); // a \ precisou ser repetida 2 vezes para não ser interpretado como caractere especial, mas apenas uma barra invertida. Para evitar problemas nos servidores linux foi feito isso, para substituir a \ por /

        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }
    }

    spl_autoload_register('myAutoLoad');

?>