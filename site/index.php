<?php

	include("class/database.class.php");

	$db = new Database();

	$db->connect();

	$db->select('posts');

	$result = $db->getResult();

	foreach($result as $i){
		echo "titulo = " . $i["title"] . "<br/>";
	}

?>