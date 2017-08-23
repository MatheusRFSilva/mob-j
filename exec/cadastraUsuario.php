<?php
require_once('../db.class.php');



$Nome_usuario =  $_POST["idNomeUsuario"];
$Sobrenome_usuario = $_POST["idSobrenomeUsuario"];
$Email_usuario = $_POST["idUsuarioemail"];
$senha_usuario = $_POST["idNewSenha"];

$objDb = new db();

	$link = $objDb->conecta_mysql();


	$sql = " call proc_cria_usuario ('$Nome_usuario','$Sobrenome_usuario','$Email_usuario',null,'$senha_usuario');";

	//executar a query
	//echo $sql;

	if (mysqli_query($link, $sql)){

		echo'Usuario registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuario!';
	}


?>