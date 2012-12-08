<?php

	class CadastrosController extends AppController {

		public $helpers = array("Html", "Form");
		public $components = array("Session");
	
		// action
		// /posts/index
		public function index(){
			$todasAsPostagens = $this->Cadastro->find('all');
			
			// jogar pra VIEW
			$this->set('cadastros', $todasAsPostagens);
		}

		public function view($id = null){

			// setar o cadastro com id == 3;
			$this->Cadastro->id = $id;

			//procurar no banco o item com id == 3
			$p = $this->Cadastro->read();

			// enviando para a VIEW os campos do item
			$this->set('cadastro', $p);
		}

		public function add(){

			# se for enviado um POST pegar os dados do form e salvar no banco
			if ($this->request->is('cadastro')) {

				# 
				$dadosDoFormulario = $this->request->data;

				# tentar salvar os dados no banco
				# se conseguir salvar, mostrar uma MSG e REDIRECIONAR pra o INDEX
				if ($this->Cadastro->save($dadosDoFormulario)) {
					# mostrar MSG
					$this->Session->setFlash("O cadastro foi inserido com sucesso!");

					# redirecionar para o index
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		public function edit($id = null) {
		    $this->Cadastro->id = $id;
		    if ($this->request->is('get')) {
		        $this->request->data = $this->Cadastro->read();
		    } else {
		        if ($this->Cadastro->save($this->request->data)) {
		            $this->Session->setFlash('O cadastro foi atualizado.');
		            $this->redirect(array('action' => 'index'));
		        }
		    }
		}

		public function delete($id) {
		    if (!$this->request->is('cadastro')) {
		        throw new MethodNotAllowedException();
		    }
		    if ($this->Cadastro->delete($id)     ) {
		        $this->Session->setFlash('O cadastro do id: ' . $id . ' foi deletado com sucesso.');
		        $this->redirect(array('action' => 'index'));
		    }
		}
	}