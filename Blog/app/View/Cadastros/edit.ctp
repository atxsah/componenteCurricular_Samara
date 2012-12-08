<h1>Edit Cadastro</h1>
<?php
    echo $this->Form->create('Cadastro', array('action' => 'edit'));
    echo $this->Form->input('nome');
    echo $this->Form->input('local');
    echo $this->Form->input('data');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');