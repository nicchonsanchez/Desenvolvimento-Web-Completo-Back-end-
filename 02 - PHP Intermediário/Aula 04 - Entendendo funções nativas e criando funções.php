<?php

    function mostrarNome($nome, $idade){
        echo "<h2>Meu nome é $nome.</h2>";
        echo "<hr/>";
        echo "<h2>Minha idade é $idade anos.</h2>";
    }
    
    mostrarNome('Nicchon', 21);

    function calculadora($n1 = 5, $n2 = 10){ // É possível colocar um valor pré definido
        echo ($n1 + $n2);
    }

    calculadora(50); // Na medida que colocamos os valores vai sendo alterada a variável pré estabelecida

    function verdade() {
        return true; // Return retorna um valor que pode ser string, número, booleween...
    }

    $var1 = verdade();

    function nomeReturn() {
        return 'Nicchon';
    }

    echo nomeReturn();
?>