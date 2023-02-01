<?php
    /*
        MOSTRAR TODAS AS TABELAS DO BANCO DE DADOS
    */
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    /*
    $tables = $pdo->query("SHOW TABLES"); // Vai mostrar as tabelas existentes no banco de dados modulo_8
    $tables = $tables->fetchAll();

    echo '<pre>';
    print_r($tables);
    echo '</pre>';
    */

    /*
        CRIAR NOVA TABELA
    */

    /* Entre os parenteses é só ir colocando o nome das colunas que desejar e a descrição dessa coluna */
    $sql = 'CREATE TABLE criadoporphp (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL
    )';

    $pdo->exec($sql);

?>