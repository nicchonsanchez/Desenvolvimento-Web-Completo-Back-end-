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
    session_destroy(); // Destrói as sessões

    setcookie('nome', "Nick Cookie", time() - 1, '/'); // Para destruir um cookie é só carregar ele com um valor negativo no tempo

?>
</body>
</html>
