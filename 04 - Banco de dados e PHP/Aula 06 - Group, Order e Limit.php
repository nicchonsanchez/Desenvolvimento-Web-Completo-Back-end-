<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Por padrão, caso haja um erro no PDO, ele não mostra qual é, com isto ele passará a mostrar.

    echo '<h3 style="color: red; text-decoration: underline 3px solid;">A ordem para uso é GROUP BY, ORDER BY e LIMIT</h3>';
    /*
        TODAS AS PESSOAS
    */
    echo '<h4>TODAS AS PESSOAS</h4>';
    $sql = $pdo->prepare("SELECT * FROM pessoas");
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC faz com que não fique refetindo as chaves em número, as que são criadas automáticamente, que ficam repetindo o conteúdo. Exeture sem o PDO::FETCH_ASSOC para entender melhor o que sai.

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

    /*
        TODAS AS PESSOAS EM ORDEM ALFABÉTICA
    */
    echo '<h4>TODAS AS PESSOAS EM ORDEM ALFABÉTICA</h4>';
    $sql = $pdo->prepare("SELECT * FROM pessoas ORDER BY nome ASC"); // Para ordenar com base no nome é só colocar ORDER BY colunaBase ASC, crescente: ASC, decrescente: DESC.
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

    /*
        LIMITANDO QUANTIDADE DE RESPOSTAS À 3 PESSOAS
    */
    echo '<h4>LIMITANDO QUANTIDADE DE RESPOSTAS À 3 PESSOAS</h4>';
    echo '<h5>Comum</h5>';
    $sql = $pdo->prepare("SELECT * FROM pessoas LIMIT 3"); // Para limitar a quantidade de resultados é usado o LIMIT e o número de resultados desejados
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<h5>Começando do 2º resultado</h5>';
    $sql = $pdo->prepare("SELECT * FROM pessoas LIMIT 1,3"); // Depois do LIMIT o primeiro número indica de onte vai começas, é posto a vírgula, e o segundo número é o limite de resultados
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<h5>Começando do 3º resultado</h5>';
    $sql = $pdo->prepare("SELECT * FROM pessoas LIMIT 2,3");
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

    /*
        AGRUPAR OS RESULTADOS PELO PARENTESCO
    */
    echo '<h4>AGRUPAR OS RESULTADOS PELO PARENTESCO</h4>';
    $sql = $pdo->prepare("SELECT * FROM pessoas GROUP BY parentesco"); // O GROUP fará com que não busque mais de uma pessoa de cada parentesco.
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

?>