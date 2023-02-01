<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE PHP</title>
</head>
<body>
    <?php
        echo "Hello World";

        // A tag <pre> serve para deixar o conteudo das mais organizado quando se vai printar uma série de variáveis na tela
        echo "<pre>";
        print_r($_SERVER); // print_r serve para exibir todas as variáveis dentro de uma variável
        echo "</pre>";
    ?>
</body>
</html>