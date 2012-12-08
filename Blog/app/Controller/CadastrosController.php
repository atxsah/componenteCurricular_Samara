<?php

class CadastrosController extends AppController {

	public $helpers = array("Html", "Form");
	public $components = array("Session");

	var $paginate = array('limit' => 5, 'order' => array('Cadastro.nome' => 'asc'));

	// action
	// /cadastro/index
	public function index() {

		$options = array('fields' => array('Cadastro.id', 'Cadastro.nome', 'Cadastro.local', 'Cadastro.data', 'Cadastro.created', 'Cadastro.modified'), 'order' => array('Cadastro.created' => 'DESC'), 'limit' => 5);

		$this -> paginate = $options;

		$todasAsPostagens = $this -> paginate('Cadastro');

		// jogar pra VIEW
		$this -> set('cadastros', $todasAsPostagens);
	}

	// /cadastros/view/3
	public function view($id = null) {

		// setar o Cadastro com id == 3;
		$this -> Cadastro -> id = $id;

		//procurar no banco o item com id == 3
		$p = $this -> Cadastro -> read();

		// enviando para a VIEW os campos do item
		$this -> set('cadastro', $p);
	}


	// /cadastros/add
	public function add() {
		# se for enviado um CADASTRO pegar os dados do form e salvar no banco
		if ($this -> request -> is('cadastro')) {

			$dadosDoFormulario = $this -> request -> data;

			# tentar salvar os dados no banco
			# se conseguir salvar, mostrar uma MSG e REDIRECIONAR pra o INDEX
			if ($this -> Cadastro -> save($dadosDoFormulario)) {
				# mostrar MSG
				$this -> Session -> setFlash("A Postagem foi inserida com sucesso!");

				# redirecionar para o index
				$this -> redirect(array('action' => 'index'));
			}
		}
	} 

	public function edit($id = null) {
		$this -> Cadastro -> id = $id;
		if ($this -> request -> is('get')) {
			$this -> request -> data = $this -> Cadastro -> read();
		} else {
			if ($this -> Cadastro -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Your post has been updated.');
				$this -> redirect(array('action' => 'index'));
			}
		}
	}

	public function delete($id = null) {
    if (!$this->request->is('cadastro')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}
