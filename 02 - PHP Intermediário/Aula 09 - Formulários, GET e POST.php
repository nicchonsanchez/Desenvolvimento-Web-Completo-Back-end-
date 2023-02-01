<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Formulários, GET e POST</title>

    <style>
        body {
            background: #fff url(https://metalsider.com.br/port/assets/img/fundo-site.jpg) left top repeat;
        }
        div {
            border-radius: 20px;
            width: 450px;
            max-width: 90%;
            margin: 20px auto;
            padding: 50px 70px;
            font-family: Arial;
            background: #f8f8f8 url(https://metalsider.com.br/port/assets/img/pattern.jpg) left top repeat;
            box-shadow: 15px 10px 15px #383838;
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
        form {
            margin: 20px auto;
            padding: 50px 60px 60px;
            background: #f8f8f8 url(https://metalsider.com.br/port/assets/img/pattern.jpg) left top repeat;
            width: 450px;
            max-width: 100%;
            border-left: 2px solid black;
            border-right: 2px solid black;
            box-shadow: 15px 10px 15px #383838;
        }

        h3{
            font-family: 'Lobster', cursive;
            text-align: center;
            font-size: 35px;
        }
        input, select{
            width: 250px;
            height: 35px;
            border: 1px black solid;
            border-radius: 5px;
            display: block;
            margin: 5px auto;
        }

        label {
            display: block;
            margin: 10px auto;
            width: 200px;
        }

        input[type="checkbox"]{
            display: inline-block;
            margin: 0 15px;
            height: 20px;
            width: 20px;
        }
        input[type="submit"]{
            margin-top: 15px;
            background: black;
            color: white;
            transition: .3s;
        }
        input[type="submit"]:hover{
            background:red;
        }
    </style>
</head>
<body>
    <?php
    // GET vai mostrar a informação na URL
    // POST não vai mostrar informação na URL

    // Para trocar a função de POST para GET é só trocar o valor do atributo da tag form de POST para GET (ou deixar vazio),
    // e no php o @_POST['nomeDoInput'] para @_GET['nomeDoInput'].

        if(isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $sexo = $_POST['sexo'];
            
            echo '<div class="dados">';
            echo "<h3 style='font-size: 25px; margin-top: 0px;'>DADOS</h3>";
            echo "<p>Nome: $nome</p>";
            echo "<p>E-mail: $email</p>";
            echo "<p>Sexo: $sexo</p>";
            foreach($_POST['info'] as $key => $value) {
                echo "<p>- $value</p>";
            }
            echo '</div>';
            die;
        }
    ?>

    <form method="post">
        <h3>Formulário POST</h3>
        <input placeholder="Nome" type="text" name="nome" />
        <input placeholder="E-mail" type="text" name="email" />
        <select name="sexo">
            <option value="masc">Masculino</option>
            <option value="fem">Feminino</option>
            <option value="" style="display: none;" selected>Sexo</option>
        </select>
        <label>Problemas de saúde?<input type="checkbox" name="info[]" value="problemaSaude"></label>
        <label>Já foi internado?<input type="checkbox" name="info[]" value="internado"></label>
        <label>Faz uso de remédio?<input type="checkbox" name="info[]" value="usoRemedio"></label>

        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>