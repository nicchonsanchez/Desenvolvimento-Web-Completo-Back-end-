<?php

	//Factory Design Pattern.
/*
	class Cachorro{

		public function __construct(){
			echo 'classe cachorro';
		}

	}


	class Gato{

		public function __construct(){
			echo 'classe gato';
		}
		
	}

	class Animal{

		public static function build($nomeClasse){
			if(class_exists($nomeClasse)){
				return new $nomeClasse;
			}else{
				die('Ops! A classe não existe!');
			}
		}

	}


	Animal::build('peixe');
*/


	//Facade Pattern

	//Adicionar/Fechar Carrinho - Carrinho
	//Calcular Frete - Frete
	//Fechar Pedido - Pedido

	class Carrinho{

		public function fecharCarrinho(){
			echo 'Carrinho fechado';
            echo "<br/>";
		}

	}

	class Frete{

		public function calcularFrete(){
            echo "Função calcular frete";
            echo "<br/>";
		}

	}

	class Pedido{

		public function fecharPedido(){
            echo "Função Fechar pedido";
            echo "<br/>";
		}

	}

	class Loja{

        public function finalizarCompra(){

            // Chamando as classes abaixo, que estão fechando tudo para a compra
            $this->fecharCarrinho();
            $this->calcularFrete();
            $this->fecharPedido();

        }

        public function fecharCarrinho(){ // Usando a classe externa para fechar o carrinho

            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
            
        }

        public function calcularFrete(){ // Usando a classe externa para calcular o frete

            $frete = new Frete();
            $frete->calcularFrete();
            
        }

        public function fecharPedido(){ // Usando a classe externa para fechar o pedido

            $pedido = new Pedido();
            $pedido->fecharPedido();
            
        }

	}

	$loja = new Loja();
	$loja->finalizarCompra();
?>