<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Site Samara Rovani</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Site feito em sala de aula, usando PHP">
		<meta name="author" content="Samara Rovani - lawoman@hotmail.com.br">

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
		<!-- <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet"> -->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="#">Samara Rovani</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li>
								<a href="page1.php">Page 1</a>
							</li>
							<li>
								<a href="page2.php">Page 2</a>
							</li>
							<li>
								<a href="aboutme.php">About</a>
							</li>
							<li class="active">
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">
								Pages
							</li>
							<li class="active">
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
				<div class="span9">
					
					<form action="formulario.php" method="POST">
						
						<fieldset>
							<legend>Formulario de Contato</legend>
							
							<input type="hidden" name="pagina" value="contato" />	
							
							<label for="idNome">Nome: </label><br/>
							<input type="text" name="nome" id="idNome"/>
							
							<label for="idEmail">Email:</label><br/>
							<input type="email" name="email" id="idEmail"/>
							
							<label for="idMensagem">Mensgaem:</label><br/>
							<textarea name="mensagem" id="idMensagem"rows="3"></textarea>		
							
							<br/>
							
							<button class="btn btn-primary">Enviar mensagem</button>				
						</fieldset>
						
					</form>
				</div><!--/span-->
			</div><!--/row-->

			<hr>

			<footer>
				<p>
					&copy; Company 2012
				</p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap-transition.js"></script>
		<script src="../assets/js/bootstrap-alert.js"></script>
		<script src="../assets/js/bootstrap-modal.js"></script>
		<script src="../assets/js/bootstrap-dropdown.js"></script>
		<script src="../assets/js/bootstrap-scrollspy.js"></script>
		<script src="../assets/js/bootstrap-tab.js"></script>
		<script src="../assets/js/bootstrap-tooltip.js"></script>
		<script src="../assets/js/bootstrap-popover.js"></script>
		<script src="../assets/js/bootstrap-button.js"></script>
		<script src="../assets/js/bootstrap-collapse.js"></script>
		<script src="../assets/js/bootstrap-carousel.js"></script>
		<script src="../assets/js/bootstrap-typeahead.js"></script>

	</body>
</html>