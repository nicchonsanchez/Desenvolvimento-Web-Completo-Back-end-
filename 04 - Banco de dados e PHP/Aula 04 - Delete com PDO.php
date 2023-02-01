<?php

    // PDO é a classe nativa do PHP que é usada para gerenciar banco de dados.

    // O parâmetro para usar é o PDO('myslq:host=[nome do host];dbname=[nome do banco de dados]','[login do banco de dados]','[senha]');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $id = 4;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?"); 
    // O $id não precisou de aspas pq é um número inteiro.
    // AND é usado para acrescentar mais um parâmetro e OR é para relativisar o parâmetro.
    //IMPORTANTE: Se não colocar WHERE, todos os cadastros serão atualizados.

    if($sql->execute(array($id))){
        echo 'Cliente deletado com sucesso!';
    }
    
?>