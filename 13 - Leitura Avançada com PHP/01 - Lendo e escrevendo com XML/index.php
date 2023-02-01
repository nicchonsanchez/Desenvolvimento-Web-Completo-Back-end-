<?php
    // Ler arquivo XML
    $xml = simplexml_load_file('arquivo.xml');

    // O acesso à informação de um XML é como ao de uma classe
    echo $xml->informacoes1->item->nome;
    echo '<br/>';
    echo $xml->informacoes1->item->idade;
    echo '<hr/>';
    echo $xml->informacoes2->item->nome;
    echo '<br/>';
    echo $xml->informacoes2->item->idade;
    echo '<hr/>';

    // Criando XML apartir de um array
    escreverXML(array("Nicchon Sanchez"=>'Nome', "21 anos"=>'Idade', "Sanctius CO"=>'Empresa'), 'arquivoCriado.xml'); // É colocado invertido a chave com o valor. Invés de $chave => $valor fica sendo $valor => $chave

    $content = simplexml_load_file('arquivoCriado.xml');
    echo $content->Empresa;

    function escreverXML($arr, $nomedoarquivo){
        $xml = new SimpleXMLElement('<root/>'); // Primeira tag do XML
        array_walk_recursive($arr, array ($xml, 'addChild'));
        file_put_contents($nomedoarquivo, $xml->asXML());
    }

    print_r('arquivoCriado.xml');
?>