<?php

    namespace Sessao1; // O que estiver abaixo disso funcionará como se estivesse dentro de uma pasta. Para ser chamado deverá ser feito como no index. O namespace deve ser o primeiro ou ultimo código do documento.

    class Class1 {
        public function __construct(){
            new \Class2; // Classe 2 não está dentro de um namespace, logo é como se estivesse na "parte geral", fora das pastas. Sendo assim, para chamá-la dentro dessa Classe1, que está num namespace, é preciso colocar essa \ antes da Classe2, para poder "voltar para a parte geral".

            new \Sessao2\Class3; // Como o Class3 está dentro da Sessao2, é preciso colocar a \NomeDoNomespace\NomeDaClassse, como no ex. ao lado.
            
            echo 'Classe 1';
        }
    }

?>