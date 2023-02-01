<style>
    *{
        font-family: Arial;
    }
</style>
<?php
    if(file_exists('file.txt')){ // file_exists verifica se o arquivo exite no diretório. Neste caso está verificando se file.txt exite.
        echo '<h3 style="padding: 10px;">O arquivo já exite!</h3>';
    } else {
        /*
            file_put_contents cria ou reescreve um arquivo. Se não exite ele cria, se existe ele reescreve.
            Parâmetro file_put_contents('nomeDoArquivo.txt', 'Conteúdo').
                Para quebrar linhas é só digitar \r\n, é algo padrão em todas as linguagens.
                LEMBRE-SE: O \r\n é como uma variável, para usar tem que fechar as aspas simples, a não ser que esteja usando aspas duplas.
        */
        file_put_contents("file.txt", "Arquivo criado com o PHP\r\n1ª Linha\r\n2ª Linha...");
        echo '<h3 style="padding: 10px;">Arquivo criado com sucesso!</h3>';
    }

    // file_get_contents() serve para fazer a leitura do arquivo
    // nl2br() serve para fazer o reconhecimento das quebras de linha de arquivo, sem ele o conteúdo será exibido tudo na mesma linha
    $conteudoArquivo = file_get_contents('file.txt');
    echo "
        <div style='border: 1px solid black; border-radius:5px; padding: 20px; width: 400px;'>
            <h3 style='color: red;'>Conteúdo do arquivo file.txt:</h3>
            <p>".nl2br($conteudoArquivo)."</p>
        </div>
    ";

    echo '<hr/>';

    file_get_contents('https://www.dankicode.com/'); // file_get_contents também serve para chamar conteúdo de sites externos, inclusive o próprio site.

    unlink('file.txt'); // UNLINK serve para excluir o arquivo
    
?>