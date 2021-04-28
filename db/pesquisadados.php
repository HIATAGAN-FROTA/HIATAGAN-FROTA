<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$cursos = $_POST['palavra'];
	
	
	$total = 0;
	$n = 1;
	$rows = "SELECT count(*) as t FROM pdfs WHERE pdfs LIKE '%$cursos%'";
	$rows = $conn->query($rows);
	$rows = $rows->fetch_assoc();
	//$total = $rows['t'];
	echo 'Existem <b>'.$rows['t'].'</b> registros';
	
?>