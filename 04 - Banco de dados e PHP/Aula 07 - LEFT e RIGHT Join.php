<style>
    * {
        font-family: Arial;
        margin-left: 15px;
    }
    h3 {
        color: red;
        text-decoration: underline solid 3px;
    }
</style>


<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Por padrão, caso haja um erro no PDO, ele não mostra qual é, com isto ele passará a mostrar.

    /*
        INNER JOIN SÓ IRÁ RETORNAR OS VALORES QUANDO SE CRUZAM
        Só vai retornar a pessoa quando o parentesco dela estiver presente na tabela de parentescos
    */
    $sql = $pdo->prepare("SELECT * FROM pessoas INNER JOIN parentescos ON `pessoas`.`parentesco` = `parentescos`.`id`");
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC faz com que não fique refetindo as chaves em número, as que são criadas automáticamente, que ficam repetindo o conteúdo. Exeture sem o PDO::FETCH_ASSOC para entender melhor o que sai.

    echo '<h3>INNER JOIN</h3>';
    
    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<pre>';
    print_r($pessoas);
    echo '</pre>';
    

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

    /*
        LEFT JOIN IRÁ RETORNAR TODAS AS PESSOAS, INDEPENDENTEMENTE DE TER UM PARENTESCO PRESENTE NA TABELA DE PARENTESCOS
        Por isso chama LEFT JOIN, Left de 'Esquerda', vai trazer todos os valores da tabela à esquerda, mesma que não tenha parâmentros dela na direita
    */
    $sql = $pdo->prepare("SELECT * FROM pessoas LEFT JOIN parentescos ON `pessoas`.`parentesco` = `parentescos`.`id`");
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC faz com que não fique refetindo as chaves em número, as que são criadas automáticamente, que ficam repetindo o conteúdo. Exeture sem o PDO::FETCH_ASSOC para entender melhor o que sai.

    echo '<h3>LEFT JOIN</h3>';

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<pre>';
    print_r($pessoas);
    echo '</pre>';
    

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

    /*
        RIGHT JOIN IRÁ RETORNAR TODOS OS PARENTESCOS, INDEPENDENTEMENTE DE TER UMA PESSOA PRESENTE NA TABELA DE PESSOAS QUE O USA
        Por isso chama RIGHT JOIN, Right de 'Direita', vai trazer todos os valores da tabela à direita, mesma que não tenha parâmentros dela na esquerda
    */
    $sql = $pdo->prepare("SELECT * FROM pessoas RIGHT JOIN parentescos ON `pessoas`.`parentesco` = `parentescos`.`id`");
    $sql->execute();

    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC faz com que não fique refetindo as chaves em número, as que são criadas automáticamente, que ficam repetindo o conteúdo. Exeture sem o PDO::FETCH_ASSOC para entender melhor o que sai.

    echo '<h3>RIGHT JOIN</h3>';

    foreach($pessoas as $key => $value){
        echo $value['nome'];
        echo '<br/>';
        echo $value['parentesco'];
        echo '<hr/>';
    }

    echo '<pre>';
    print_r($pessoas);
    echo '</pre>';
    

    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';

?>