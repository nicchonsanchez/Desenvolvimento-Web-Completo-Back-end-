<?php

    include('interface1.php');

    class Teste implements Interface1{ // Implements vai implementar o conteúdo que está na Interface. Assim, tudo que estiver dentro da interface DEVERÁ ser colocado dentro da classe,
        public function printOnScreen($par){ // Como o printOnScreen ao lado. Se estiver faltando o parâmetro dentro dele, o códito não funcionará.
            echo $par;
        }
    }

    $teste = new Teste;

    $teste->printOnScreen("Deu certo");

?>