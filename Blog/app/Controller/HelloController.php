<?php

	class HelloController extends AppController {
		
		// action
		// /hello/index
		public function index(){
			$nomeCompleto = 'Ismael Strada';
			
			// enviando o conteudo da variavel
			// para a VIEW
			$this->set('nome', $nomeCompleto);
		}
		
		
		// /hello/sobremim
		public function sobremim(){
			
		}
		
		// /hello/contato
		public function contato(){
			
		}
		
		
		// /hello/teste
		public function teste(){
			
		}
	} 

?>