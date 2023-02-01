<?php

    include('class1.php');
    include('class2.php');
    include('class3.php');

    use \Sessao2\Class3 as classe_exemplo; // Desta forma, para usar o Class3 é só digitar classe exemplo, como abaixo.

    $teste = new \Sessao1\Class1; // Como Class1 está após o namespace Sessao1, para criar o objeto com ele precisa colocar \Sessao1\NomeDaClasse.
    $teste2 = new classe_exemplo;
?>