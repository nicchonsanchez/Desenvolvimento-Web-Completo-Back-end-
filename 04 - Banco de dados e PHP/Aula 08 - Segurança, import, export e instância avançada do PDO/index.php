<?php
    /*
        É mais profisisonal utilizar constantes
    */
    define('HOST', 'localhost');
    define('DB', 'modulo_8');
    define('USER', 'root');
    define('PASS', '123'); // DEIXEI A SENHA ERRADA DE PROPÓSITO PARA CAUSAR O ERRO NO LOGIN DO BANCO DE DADOS E APARECER A MENSAGEM DE ERRO CRIADA.

    try{ // 4A- O try serve da seguinte maneira: Ele irá tentar execultar o que está aqui abaixo... [LEIA A PARTE 4B]
        /*
            1- Foram trocados os valores pelas constantes existentes.
            2- Após os parâmetros usados anteriormente, nas outras aulas, foi colocado array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"), ele é utilizado para atribuir o UTF-8, que passa a reconhecer os acentos do banco de dados.
        */
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        // 3- O método atruido abaixo é utilizado para mostrar na tela o motivo do erro do PDO, invés de mostrar somente que houve um erro.
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) { // 4B- Caso não dê certo, vai partir para essa parte abaixo do catch. Catch significa pague, ele vai pegar a Exceptoin (excessão) e jogar na variável $e, onde ficará o erro que está gerando.
        echo '<h1 style="background: #ccc; padding: 100px; text-align: center; font-family: Arial;">ERRO AO CONECTAR!</h1>';
        die;
    }

    $sql = $pdo->prepare("SELECT * FROM pessoas");
    $sql->execute();
    $pessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($pessoas);
    echo "</pre>";
?>