<?php
session_start();
include_once("conex.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$mensage = filter_input(INPUT_POST, 'mensage', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO form (nome, mensage, created) VALUES ('$nome', '$mensage', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'></p>";
	header("Location: success.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>A Mensagem não foi cadastrada com sucesso</p>";
	header("Location: index.php");
}
