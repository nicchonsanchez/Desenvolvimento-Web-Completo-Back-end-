<?php
    $json = '{"Nome":"Nicchon", "Idade":"21","Empresas":{"Empresa1":"Sanctius CO","Empresa2":"Nord WEB"},"Peso":"52kg"}';

    // DECODIFICANDO O jSON
    // jSON pode ser retornado como objeto ou array:
    $obj = json_decode($json);
    $arr = json_decode($json,true); // Para retornar como array, basta colocar a vírgula e o true

    // Retornando como objeto:
    echo $obj->Nome;
    echo "<br/>";
    echo $obj->Empresas->Empresa1;
    echo "<hr/>";

    // Retornando como array:
    echo $arr['Nome'];
    echo "<br/>";
    echo $arr['Empresas']['Empresa1'];
    echo "<hr/>";

    // TRANSFORMAR ARRAY EM jSON
    $arr2 = ["Nome"=>"Nicchon", "Cidade"=>"Betim"];
    $json2 = json_encode($arr2);
    echo $json2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jSON</title>
</head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            alert('Teste!');
            $.ajax({
                url:'request.php',
                dataType: 'json' // jSON é usado em toda linguagem de programação. p dataType está informando que estamos buscando por um jSON
            }).done(function(data){
                alert(data.Nome); // DATA no caso é informação e o .chave, no caso a chave que estamos buscando retorno é o nome portanto usamos .nome
            })
        })
    </script>
<body>
</body>
</html>