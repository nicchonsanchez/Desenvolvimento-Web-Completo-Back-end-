<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
<header>
    <ul>
        <li><a href="index.php">Página 1</a></li>
        <li><a href="index2.php">Página 2</a></li>
        <li><a href="index3.php">Página 3</a></li>
    </ul>
</header>
<?php

    /* 
        SESSION
    */
    session_start();
    $_SESSION['nome'] = 'Nicchon'; // Sessão
    $_SESSION['idade'] = 21; // Sessão

    echo $_SESSION['nome'];
    echo $_SESSION['idade'];

    /*
        COOCKIES
        Site para ver funções para arrays: php.net/manual/pt_BR/function.setcookie.php
    */

    setcookie('nome', "Nick Cookie", time() + (60*60*24), '/'); // Parâmetros: 1- String, 2- Valor, 3- Tempo de duração (no caso vai durar 1 dia), 4- Path (a / faz com que o cookie fique disponível para todas as páginas. Se não tiver a \ fica disponível somente para a página que foi gerado o cookie)
    echo $_COOKIE['nome'];

?>
</body>
</html>