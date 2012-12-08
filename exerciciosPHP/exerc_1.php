<?php
$title = "Site.com";
$subtitle = "este é um site em PHP";
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title . "-" . $subtitle; ?></title>
</head>
<body>
	<!-- INICIO DO EXERCICIO 1 -->
	<h2>Exercício 1:</h2>
	<div id="rodape">
		<p>&reg copyright Site.com – <?php echo date("Y") ?></p>
	</div>
	<!-- FIM DO EXERCICIO 1 -->
	
	<!-- INICIO DO EXERCICIO 2-->
	<h2>Exercício 2:</h2>
	<h1>
		<div id="conteudo">
		<?php
		$nome1 = "Fulano";
		$nome2 = "Fulana";
		$nome3 = "Ciclana";
		$sexo1 = "M";
		$sexo2 = "F";
		$sexo3 = "M";
		?>
		
		<p><?php echo $nome1 . ", " . $nome2 . " e " . $nome3; ?></p>		
		
		<?php
		if ($sexo1 == "M" && $sexo2 == "M" && $sexo == "M") {
			echo "A equipe é formada por meninos";
		} else if ($sexo1 == "F" && $sexo2 == "F" & $sexo == "F") {
			echo "A equipe é formada por meninas";
		} else {
			echo "A equipe é mista";
		}
		?>
		</div>
	</h1>
	<!-- FIM DO EXERCICIO 2 -->
	
	<!-- INICIO DO EXERCICIO 3 -->
	<h2>Exercício 3:</h2>
	<?php
	switch ($qt="1") {
		case '0' :
			echo "Não possui nenhum produto cadastrado";
			break;
		case '1' :
			echo "Você possui um produto cadastrado";
			break;
		case '1,2,3' :
			echo "Você possui vários produtos cadastrados";
			break;
		default :
			echo "Cadastro inválido, tente novamente";
			break;
	}
	?>
	<!-- FIM DO EXERCICIO 3-->
	
	<!-- INICIO DO EXERCICIO 4 -->
	<h2>Exercício 4:</h2>
	<h3>4a:</h3>
	<!-- A -->
	<?php
	for ($x = 0; $x <= 25; $x = $x + 1) {
		echo '<p>Lactobacilos vivos também possuem sentimentos</p>';
	}
	?>
	
	<!-- B  Escrever um algoritmo que receba qualquer valor e mostre os 
		valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3"; -->
	<h3>4b:</h3>
	<?php
	$valor = 5;
	for ($x = 0; $x <= $valor; $x++) {
		echo "$x <br/>";
	}
	?>
	
	<!-- C  capturar dois valores em variáveis e mostrar os números entre 
		eles. Ex: 5 e 10, imprimir: "6 7 8 9"; -->
	<h3>4c:</h3>
	<?php
	$valor1 = 5;
	$valor2 = 10;
	for ($valor1; $valor1 <= $valor2; $valor1++) {
		echo "$valor1 <br/>";
	}
	?>
	
	<!-- D Escrever um algoritmo que multiplique os números utilizando apenas o 
		operador +, ex: (3 * 5) = 5 + 5 + 5 -->
	<h3>4d:</h3>
	<!-- FIM DO EXERCICIO 4 -->
	<?php
	$v1 = 3;
	$v2 = 5;
	$resultado = 0;
	for ($i = 0; $i <= $v2; $i++) :
		$resultado = $resultado + $i;
	endfor;
	echo "$resultado";
	?>
	
	<!-- INICIO DO EXERICIO 5-->
	<h3>Exercício 5:</h3>
	<?php
	function multiplica() {
		$v1 = 3;
		$v2 = 5;
		$resultado = 0;
		for ($i = 0; $i <= $v2; $i++) :
			$resultado = $resultado + $i;
		endfor;
		echo "$resultado";
	}

	echo multiplica();
	?>
	<!-- FIM DO EXERCICIO 5  -->
	
	<!-- INICIO DO EXERCICIO 6-->
	<h3>Exercício 6:</h3>
	<?php
	function imprime($teste) {
		$string = $teste;
		return $string;
	}

	echo "mas oque eh isso: " . imprime("vamos ver se funfa assim?");
	?>
	<!-- FIM DO EXERCICIO 6 -->
	
	<!-- INICIO DO EXERCICIO 7 -->
	<h3>Exercício 7:</h3>
	<p></p><i>a - Descrever a sua funcionalidade e fazer exemplos das seguintes funções:<br/>Array(): Array é uma coleção de elementos 
		indexados na qual cada um dos elementos tem um número identificador único.<br/>Exemplo:</i></p>
	<?php
	$lista = "mas o que, eu estou fazendo, bora dormir huee";
	$arrayList = explode(",", $lista);

	echo "<p>Olha a lista: </p>";
	echo "<ul>";
	echo "<li>" . $arrayList[0] . "</li>";
	echo "<li>" . $arrayList[1] . "</li>";
	echo "<li>" . $arrayList[2] . "</li>";
	echo "</ul>";
	?>
	
	<p><i>b - Trim(): Retira espaço no ínicio e final de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$texto = " \t\t hehueuheuh... ";
	$trimmed = trim($texto);
	var_dump($texto);
	echo "<br/>";
	var_dump($trimmed);
	?>
	
	<p><i>c - Substr(): Responsável por retornar um pedaço da string, utilizando três parâmetros: a própria string, o índice inicial
		 e a quantidade de caracteres a ser retornada.<br/>Exemplo:<br/></i></p>
	<?php
	$texto = "eheueeheu vamos fazer o teste!";
	echo "Sem o substr: " . "$texto <br/>";
	echo "Com o substr: " . substr($texto, 0, 12);
	?>
	
	<p><i>d - Strtolower(): Convete toda a string em letra minúsculas.<br/>Exemplo:<br/></i></p>
	<?php
	$text = "AUHAHUAUHA TUDO CERTO!";
	echo "Sem strtolower: " . "$text <br/>";
	echo "Com strtolower: " . strtolower($text);
	?>
	
	<p><i>e - Strtoupper(): Converte toda a string em letra maiúscula.<br/>Exemplo:</br></i></p>
	<?php
	$text2 = "e lah vamos nos hehe";
	echo "Sem strtoupper: " . "$text2 <br/>";
	echo "Com strtoupper: " . strtoupper($text2);
	?>
	
	<p><i>f - Ucfirst(): Converte para maiúscula o primeiro caractere de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$text3 = "within Temptation - Sinead (Benno De Goeij Remix) (BacauHouseMafia.Ro)";
	echo "Sem ucfirst: " . "$text3 <br/>";
	echo "Com ucfirst: " . ucfirst($text3);
	?>
	
	<p><i>g - Ucwords(): Converte para maiúsculas o primeiro caractere de cada palavra.<br/>Exemplo:<br/></i></p>
	<?php
	$text4 = "show de bola";
	echo "Sem ucwords: " . "$text4 <br/>";
	echo "Com ucwords: " . ucwords($text4);
	?>
	
	<p><i>h - Explode(): Divide uma string em string, retornando uma matriz de string, cada uma como substring
		de string formada pela divisão dela a partir do delimiter.<br/>Exemplo:<br/></i></p>
	<?php
	$text5 = "show de bola e mais um teste hehe";
	$opa = explode(" ", $text5);
	echo $opa[0];
	echo $opa[1];
	echo $opa[2];
	echo $opa[3];
	echo $opa[4];
	echo $opa[5];
	echo $opa[6];
	echo $opa[7];
	?>
	
	<p><i>i - Var_dump(): Representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.<br/>Exemplo:<br/></i></p>
	<?php
	$number = 10.3;
	var_dump($number);
	?>
	
	<p><i>j - Implode(): Junta elementos de uma matriz em uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$musica = array('trance', 'dance', 'jumpstyle');
	$arrayString = implode(", ", $musica);

	print $arrayString;
	?>
	
	<p><i>k - Htmlspecialchars(): Converte caracteres especiais para a realidade HTML.<br/>Exemplo:<br/></i></p>
	<?php
	$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
	echo $new;
	?>
	
	<p><i>l - Join(): Sinônimo de implode().<br/>Exemplo:<br/></i></p>
	<?php
	$hehe = array('oi', 'tudo bem?!', 'lindo', 'dia!');
	echo join(" ", $hehe);
	?>
	
	<p><i>m - Isset(): Informa se a variável foi iniciada.<br/>Exemplo:<br/></i></p>
	<?php
	$var = 'com sono, mto sono';

	if (isset($var)) {
		echo "Essa variável existe.";
	}
	?>
	
	<p><i>n - Strlen(): Retorna o tamanho de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$str = 'auhuhuhea';
	echo $str . ": " . strlen($str);
	?>
	
	<p><i>o - Is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric():
		Informa o tipo da variavel.<br/>Exemplo:<br/></i></p>
	<?php
	if (is_float(27.25)) {
		echo "is float\n";
	} else {
		echo "is not float\n";
	}
	var_dump(is_float('abc'));
	var_dump(is_float(23));
	var_dump(is_float(23.5));
	var_dump(is_float(1e7));
	var_dump(is_float(true));
	?>
	<br/>
	<?php
	if (is_int(27)) {
		echo "is int\n";
	} else {
		echo "is not int\n";
	}
	var_dump(is_int('abc'));
	var_dump(is_int(23));
	var_dump(is_int(23.5));
	var_dump(is_int(1e7));
	var_dump(is_int(true));
	?>
	<br/>
	<?php
	$yes = array('this', 'is', 'an array');

	echo is_array($yes) ? 'Array' : 'not an Array';
	echo "\n";

	$no = 'this is a string';

	echo is_array($no) ? 'Array' : 'not an Array';
	?>
	<br/>
	<?php
	if (is_string("23")) {
 		echo "is string\n";
	} else {
 		echo "is not an string\n";
	}
	var_dump(is_string('abc'));
	var_dump(is_string("23"));
	var_dump(is_string(23.5));
	var_dump(is_string(true));
	?>
	<br/>
	<?php
	$a = false;
	$b = 0;

	if (is_bool($a)) {
    	echo 'A variável $a é um valor booleano';
	}
	if (is_bool($b)) {
    	echo 'A variável $b é um valor booleano';
	}
	?>
	<br/>
	<?php
	$var_name1=678;  
  
	if (is_numeric($var_name1))  
	{  
		echo "$var_name1 is Numeric.<br>" ;  
	} else {  
		echo "$var_name1 is not Numeric. <br>" ;  
	}
	?>
	
	<p><i>p - Getdate(): Retorna a data atual.<br/>Exemplo:<br/></i></p>
	<?php
	$today = getdate(); 
	print_r($today);
	?>
	
	<p><i>q - Empty(): Informa se a variável é vazia.<br/>Exemplo:<br/></i></p>
	<?php
	$var = 0;

	if (empty($var)) {
    	echo "$var variável inexistente";
	}
	?>
	
	<p><i>r - Strip_tags(): Retira as tags HTML e PHP de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
	echo strip_tags($text);
	echo "\n";

	echo strip_tags($text, '<p><a>');
	?>
	
	<p><i>s - Max(): Encontra o maior valor. Min(): Encontra o menor valor.<br/>Exemplo:<br/></i></p>
	<?php
	echo min(2, 3, 1, 6, 7); 
	?>
	<br/>
	<?php
	echo max(array(2, 4, 5));
 	?>
	
	<p><i>t - Abs():  Valor absoluto.<br/>Exemplo:<br/></i></p>
	<?php
	echo $abs = abs(-4.2);
	?>
	
	<p><i>u - ceil(), floor(), round(): Arredonda os vaçlores.<br/>Exemplo:<br/></i></p>
	<?php
	echo $n = ceil(4.2);
	?>
	<br/>
	<?php
	echo $n = floor(4.9);
	?>
	<br/>
	<?php
	echo $n = round(4.2);
	?>
	
	<p><i>v - Rand(): Gera um inteiro aleatório.<br/>Exemplo:<br/></i></p>
	<?php
	echo rand();
	?>
	
	<p><i>w - Sqrt(): Calcula a raiz quadrada.<br/>Exemplo:<br/></i></p>
	<?php
	echo "Raiz quadrada de 9 é: ". sqrt(9);
	?>
	
	<p><i>x - Str_replace(): Substitui todas as ocorrências da string de procura com a string de substituição.<br/>Exemplo:<br/></i></p>
	<?php
	$letters = array('a', 'p');
	$fruit   = array('apple', 'pear');
	$text    = 'a p';
	$output  = str_replace($letters, $fruit, $text);
	echo $output;
	?>
	
	<p><i>y - Count(): Conta o número de elementos de uma variável, ou propriedades de um objeto.<br/>Exemplo:<br/></i></p>
	<?php
	$a[0] = 1;
	$a[1] = 3;
	$a[2] = 5;
	echo $resultado = count($a);
	?>
	
	<p><i>z - Htmlentities(): Converte todos os caracteres aplicáveis em entidades html..<br/>Exemplo:<br/></i></p>
	<?php
	$str = "The 'bold' is <b>bold</b>";

	echo htmlentities($str);
	?>
	
	<!-- FIM DO EXERCICIO 7 -->
	
	<!-- INICIO DO EXERCICIO 8 -->
	<h3>Exercício 8:</h3>
	<p><i>Conversão de string para integer:</i></p>
	<?php
	$string = '19';
	$int = (int)$string;
	echo $int;
	?>
	
	<p><i>Conversão de integer para string:</i></p>
	<?php
	$number2 = 19;
	$string = (string)$number2;
	echo $string;
	?>
	
	<p><i>Conversão de string para array:</i></p>
	<?php
	$tex = "saah, cris, rovani";
	$arrayTex = explode(',', $tex);
	print_r($arrayTex);
	?>
	
	<p><i>Conversão de array para string:</i></p>
	<?php
	$arrayList2[] = "dançar na chuva";
	$arrayList2[] = "não pise na grama";
	$arrayList2[] = "sem sono";

	print_r(implode(':', $arrayList2))
	?>
	
	<p><i>Conversão de integer para float:</i></p>
	<?php
	$int = (float)19;
	echo sprintf("%4.1f", $int);
	?>
	
	<p><i>Conversão de float para string em formato de R$:</i></p>
	<?php
	$int2 = (float)33.4;
	echo sprintf("R$ %4.1f", $int2);
	?>
	<!-- FIM DO EXERCICIO 8 -->
	
	<!-- INICIO DO EXERCICIO 9 -->
	<h3>Exercício 9:</h3>
	<form action="formulario.php" method="POST">
						
	<fieldset>
		<legend>Formulario de Informações</legend>
							
		<input type="hidden" name="pagina" value="contato">
          			
          			<label for="idNome">Nome: </label>
          			<input type="text" name="nome" id="idNome" required="true"/> 
          			
          			<br/>
          			
          			<label for="idEmail">Email: </label>
          			<input type="email" name="email" id="idEmail" required="true"/> 
          			
          			<br/>
          			
          			<label for="idSenha">Senha: </label>
          			<input type="password" name="senha" id="idSenha" required="true"/>
          			
          			<br/>
          			
      				<label for="idMensagem">Mensagem: </label><br />
          			<textarea name="mensagem" id="idMensagem" rows="3"></textarea>
          			
          			<br/>
          			
          			<p>Sexo: </p>
          			<input type="radio" name="radio" value="Masculino" id ="idRadio" required="true"/>
          			<label for="idRadio">Masculino </label>
          			          			
          			<br/>
          			
          			<input type="radio" name="radio" value="Feminino" id="idRadio" required=""/>
          			<label for="idRadio">Feminino</label>
          			          			
          			<br/><br/>
          			
          			<input type="checkbox" name="Dica" id="idCheckBox"/>
          			<label for="idCheckBox">Achou legal? Então marque aqui para divulgar.</label>
          			
          			<br/><br/>
          			
          			
          			<button class="btn btn-primary">Enviar Informações</button>							
	</fieldset>
						
	</form>
	<!-- FIM DO EXERCICIO 9 -->
</body>
</html>

