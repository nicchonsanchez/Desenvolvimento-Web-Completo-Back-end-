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

    session_start();

    $_SESSION['nome'] = ""; // Deixa a sessão como vazio
    unset($_SESSION['nome']); // Destrói a sessão nome

        echo $_SESSION['nome'];
        echo $_SESSION['idade'];
        echo "<br/>";
        echo $_COOKIE['nome'];

?>
</body>
</html>
