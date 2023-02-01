<?php

    /* 
        Site para ver funções para strings: php.net/manual/pt_BR/ref.string.php
    */

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fringilla in justo eu feugiat. Cras hendrerit purus in ornare consectetur. Fusce quis lacinia mauris. Curabitur ut lacus a dolor pretium tempor. Donec maximus gravida nibh. Suspendisse hendrerit tempor justo non venenatis. Phasellus et vehicula ipsum, vel ullamcorper mauris. Pellentesque scelerisque ac nulla sed lobortis. Proin aliquam hendrerit lectus, et pellentesque est aliquet ut. Suspendisse maximus orci sed nulla rhoncus rhoncus. Ut egestas, dolor nec vulputate volutpat, sapien nunc viverra velit, non pellentesque ligula est ut turpis. Sed eget dui posuere nunc cursus fringilla. Nunc ut est viverra, gravida erat non, finibus risus. Proin in diam in sapien posuere semper. Aenean enim ligula, auctor vitae metus tincidunt, rhoncus egestas massa.';

    // Serve para recortar minha string.
    echo substr($conteudo, 0, 20); // 1- variável, 2- por onde começa (no caso do 0 é o início), 3- onde termina (20 é a vigésima letra).

    $nome = 'Nicchon Sanchez Pinto';

    // Explode serve para dividir minha string com base num parâmetro.
    $nomes =  explode(' ', $nome); // Neste exeplo o parâmetro é o espaço.
    print_r($nomes);

    // Ao contrário de explode, implode serve para juntar as strings com um delimitador.
    $nomesJuntos = implode(' ', $nomes); // Neste caso, o delimitador é um espaço
    echo $nomesJuntos;

    // Strip Tags retira as tags de html da string, caso tenha.
    $exTag = "<h1>Nicchon</h1> Sanchez";
    echo strip_tags($exTag); // Retirou o h1.

    // htmlentities mostra o html.
    $codHTML = "<div><p>Nick<p></div>";
    echo $codHTML; // Vai rodar o código.
    echo htmlentities($codHTML); // Vai mostrar o código.
?>