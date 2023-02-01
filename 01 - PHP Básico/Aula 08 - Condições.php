<?php

    $var1 = "Nick";
    $var2 = "Juh";

    if($var1 == $var2){
?>

        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>DEU CERTO</title>

            <style>
                div {
                    background: blue;
                    color: yellow;
                    font-weight: bold;
                }
            </style>
        </head>
        <body>
            <div>
                A variável é a mesma!
            </div>
        </body>
        </html>

<?php

    }elseif ($var1 != $var2){
        echo "else if deu certo";
    } else{
        echo 'A condição não bate';
    }

?>