<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    /*
        //MÉTODO 01
    $sql = $pdo->prepare("SELECT * FROM categorias"); // O * simboliza que é pra pegar todas as colunas, mas poderia ser selecionada apenas uma coluna.
    $sql->execute();

    $info = $sql->fetchAll();

    foreach($info as $key => $value){
        $categoria_id = $value['id'];
        echo '<h3>Categoria: '.$value['nome'].'</h3>';
        echo '<br/>';

        $sql = $pdo->prepare("SELECT * FROM posts");
        $sql->execute();
        $infoPosts = $sql->fetchAll();

        foreach($infoPosts as $key => $value){
            if($key == 0)
                echo '<hr/>';
            echo "Título: $value[titulo]";
            echo '<br/>';
            echo "Notícia: $value[conteudo]";
            echo '<hr/>';
        }
    }
    */

        //MÉTODO 02 - USANDO INNER JOIN
        /*
            INNER JOIN vai mesclar as duas tabelas.
            ON serve como se fosse um WHERE. Para não ficar dando loop nas tabelas aderindo a categoria errada ao post, o ON faz o seguinte:
            Vai repetir a categoria de acordo com quando coincidir de, na tabela categorias, a coluna id for igual à, na tabela posts, coluna categoria_id.
        */

    //$sql = $pdo->prepare("SELECT * FROM posts INNER JOIN categorias ON `posts`.`categoria_id` = `categorias`.`id`"); // Seleção mais básica
    $sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*,`posts`.`id` AS `post_id` FROM posts INNER JOIN categorias ON `posts`.`categoria_id` = `categorias`.`id`");
    /*
        Nesta seleção mais avançada, foi selecionado tudo (*) de posts e de categorias. Porém, como ambos têm uma coluna de mesmo nome, no caso é a de id
        foi utilizado `posts`.`id` as `post_id`, renomeando a coluna id da tabela posts para post_id, evitando conflito, possibilitando a apresentação de ambos.
    */
    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC faz com que não fique repetindo as chaves em número, as que são criadas automáticamente, que ficam repetindo o conteúdo. Exeture sem o PDO::FETCH_ASSOC para entender melhor o que sai.

    echo '<pre>';
    print_r($info);
    echo '</pre>';
?>