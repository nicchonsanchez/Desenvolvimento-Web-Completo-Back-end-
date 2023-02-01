<?php

    // PDO é a classe nativa do PHP que é usada para gerenciar banco de dados.

    // O parâmetro para usar é o PDO('myslq:host=[nome do host];dbname=[nome do banco de dados]','[login do banco de dados]','[senha]');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $id = 2;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Matheus', sobrenome='Costa' WHERE id=$id AND sobrenome='Costa' OR sobrenome='Ribeiro da Costa'"); 
    // O $id não precisou de aspas pq é um número inteiro.
    // AND é usado para acrescentar mais um parâmetro e OR é para relativisar o parâmetro.
    //IMPORTANTE: Se não colocar WHERE, todos os cadastros serão atualizados.

    if($sql->execute()){
        echo 'Cliente atualizado com sucesso!';
    }
    
?>