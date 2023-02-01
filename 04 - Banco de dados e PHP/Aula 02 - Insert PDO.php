<?php

    // PDO é a classe nativa do PHP que é usada para gerenciar banco de dados.

    // O parâmetro para usar é o PDO('myslq:host=[nome do host];dbname=[nome do banco de dados]','[login do banco de dados]','[senha]');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    //$sql = $pdo->prepare("INSERT INTO `clientes` VALUE (null,'Nicchon','Sanchez','2022-07-01 22-00-00')"); // Ao ser execultado com o $sql->execute(); vai ser cadastrado no banco de dados.

    date_default_timezone_set('America/Sao_Paulo');
    
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUE (null,?,?,?)"); // O primeiro parâmetro está null pq é automático, logo não precisa ser definido.
        $sql->execute(array($nome,$sobrenome,$momento_registro));

        echo 'Cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" id="name">
        <input type="text" name="sobrenome" id="lastname">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>