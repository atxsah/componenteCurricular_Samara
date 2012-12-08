<!--<pre>
	<?php print_r($posts); ?>
</pre>-->
<div class="page-header">
	<h1>Listando Cadastros Eventos</h1>
</div>
<p>

	<?php echo $this -> Html -> link("Novo evento", array('controller' => 'cadastros', 'action' => 'add'), array('class' => 'btn btn-success')); ?>
</p>
<table class="table table-hover">
	<thread>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Local</th>
			<th>Data</th>
			<th>Created</th>
			<th>Modified</th>
			<th colspan="3">Ações</th>
		</tr>
	</thread>
	<body>
			<?php foreach($cadastros as $cadastro): ?>
				<tr>
					<td><?php echo $cadastro["Cadastro"]["id"]; ?></td>
					<td><?php echo $cadastro["Cadastro"]["nome"]; ?></td>
					<td><?php echo $cadastro["Cadastro"]["local"]; ?></td>
					<td><?php echo $cadastro["Cadastro"]["data"]; ?></td>
					<td><?php echo $cadastro["Cadastro"]["created"]; ?></td>
					<td><?php echo $cadastro["Cadastro"]["modified"]; ?></td>
					<td>
						<?php echo $this -> Html -> link("Visualizar", array('controller' => 'cadastros', 'action' => 'view', $cadastro["Cadastro"]["id"]), array('class' => 'btn')); ?>
						<?php echo $this -> Html -> link("Editar", array('controller' => 'cadastros', 'action' => 'edit', $cadastro["Cadastro"]["id"]), array('class' => 'btn btn-info')); ?>
						<?php echo $this -> Form -> postLink('Excluir', array('action' => 'delete', $cadastro['Cadastro']['id']), array('class' => 'btn btn-danger btn-small')); ?>
					</td>
				</tr>
			<?php endforeach; ?>
	</body>
</table>
 
<!-- 
<?php
$title = '<< Anterior'; 
$options = array( ); 
$disabledTitle = NULL; 
$disabledOptions = array( );


echo $this->Paginator->prev($title, $options, $disabledTitle, $disabledOptions);

$title = ' Próximo >>'; 
$options = array( ); 
$disabledTitle = NULL; 
$disabledOptions = array( );

echo $this->Paginator->next($title, $options, $disabledTitle, $disabledOptions);
?>