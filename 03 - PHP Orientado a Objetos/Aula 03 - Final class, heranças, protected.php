<?php

    final class Filha {
        public function mostrarOla(){
            echo "Olá";
        }
    }

    // Extends serve para herdar os itens de dentro de outra classe, aderir o conteúdo.
    class Pai /*extends Filha*/ { // Extends não vai funcionar, pq filha é uma classe FINAL, logo não podem ser herdados os conteúdos de dentro dela.
        public function mostrarTchau(){
            echo "Tchau";
        }

        protected function testeProt() { // Protected pode ser chamado em outras classes que herdam a que o possúi
            echo "Protected";
        }
    }

    class Neto extends Pai{ // Vai herdar a função mostrarTchau() do pai, por causa do EXTENDS
        public function mostrarPontos(){
            echo "....";
            $this->testeProt();
        }

        public function testeProt(){ // É possível criar uma função com o mesmo nome da herdada da classe Pai
            echo "Prot do neto <br/>";
            parent::testeProt(); // Para mostrar o conteúdo da função testeProt() herdada do pai usamos o parent.
        }
    }

    $pai = new Pai;
    $filha = new Filha;
    $neto = new Neto;

    $filha->mostrarOla();
    echo "<br/>";
    
    //$pai->mostrarOla(); // Olá não foi herdada da classe Filha, pq Filha é uma classe final.
    $pai->mostrarTchau();
    echo "<br/>";

    $neto->mostrarTchau(); // Tchau foi herdado de Pai.
    echo "<br/>";
    $neto->mostrarPontos(); // Dentro do ponto está sendo realizado um echo de $this->testeProt() que está na classe Pai.
    echo "<br/>"


?>