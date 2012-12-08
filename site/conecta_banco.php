<?php
	//conexao no banco MySql
    mysql_connect("localhost", "root", "") or die(mysql_error());
	
	mysql_select_db("testePHP") or die(mysql_error());
	
	$sql = "INSERT INTO Contact (nome, email, message, created) VALUE('saah', 'sarovani@hotmail.com', 'testando o teste do teste', NOW())";
	$strSQL = "INSERT INTO Contatc(nome, email, message, created) VALUES('" . $_POST["nome"] . ". " . $_POST["email"] . ".
	" . $_POST["message"] . "." . $_POST["created"] . "')";
	
	mysql_query($sql) or die(mysql_error());
	
	echo "funcionou?";
	
	mysql_close();
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database= "testePHP";
	
	$conn = new mysqli($host, $user, $pass, $database);
	
	if($conn->connect_erro){
		echo "Failed to conect to MySql: (" . $conn->connect_erro . ")" . $conn->connect_error;
	}
	
	$sql = "SELECT *FROM contat";
	
	$result = $conn->query($sql);
	
	mysql_close();
	echo "o contato de $nome foi inserido no BD com sucesso!!";
?>