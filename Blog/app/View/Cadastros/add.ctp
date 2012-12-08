<h1>Adicionando novo Cadastro</h1>

<?php
//criando o formulario através do Ajudante Form
echo $this->Form->create('Cadastros');

//gerando os inputs através do Ajudante Form
echo $this->Form->input('nome');
echo $this->Form->input('local');
echo $this->Form->input('data');

//fechando o formulario e gerando o botao submit
echo $this->Form->end('Enviar');