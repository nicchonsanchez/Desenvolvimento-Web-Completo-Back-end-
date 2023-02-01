<?php
    /*
        Site para mais informações: php.net/manual/pt_BR/ref.dir.php
    */

    if(isset($_POST['del_pasta']) == false){
        if(is_dir('Pasta criada com PHP') == false){ // is_dir verifica se existe uma pasta com determinado nome
            mkdir('Pasta criada com PHP'); // mkdir serve para criar uma pasta
            for($i=0;$i<100;$i++){
                mkdir('Pasta criada com PHP\Pasta '.$i);
            }
            echo 'Pasta criada com sucesso!<br>';
        } else {
            echo 'Esta pasta já exite!<br>';
        }
    }

    if(isset($_POST['del_pasta'])){
        if(is_dir('Pasta criada com PHP')){
            if($handle = opendir('Pasta criada com PHP')){
                while($file = readdir($handle)){
                    if($file == '.' || $file == '..'){ // Serve para pular o . e o .. que aparecem no início
                        continue;
                    }
                    rmdir("Pasta criada com PHP/$file");
                }
                closedir($handle);
            }
            rmdir("Pasta criada com PHP");
            echo 'Pasta deletada com sucesso!<br>';
        } else {
            echo 'A pasta chamada "Pasta criada com PHP" não exite<br>';
        }
    }

?>

<br>
<form action="" method="post">
    <input type="submit" value="DELETAR PASTA" name="del_pasta">
    <input type="submit" value="CONTEÚDO DA PASTA" name="ver_pastas">
</form>

<?php
    if(isset($_POST['ver_pastas'])){
        if($handle = opendir('Pasta criada com PHP')){
            while($file = readdir($handle)){
                if($file == '.' || $file == '..'){ // Serve para pular o . e o .. que aparecem no início
                    continue;
                }
                echo $file;
                echo '<br/>';
            }
            closedir($handle);
        }
    }
?>

