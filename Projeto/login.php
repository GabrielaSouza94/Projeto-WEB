<?php
session_start();
include 'dbh.php';

$email = $_POST['email'];
$password = $_POST['password'];

//guarda o comando sql para selecionar a row da table que tem as informações obtidas pelo POST
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' "; 
$result = mysqli_query($conn,$sql); // result guarda o resultado da tentativa de se conectar ao banco passando os parametros 

if(!$row = mysqli_fetch_assoc($result)){ // se não obteve nenhum resultado
	header("Location: index.php?resposta=failure_login"); // retorna para o index.php carregando o get com resposta de fracasso no login
}else{
	$_SESSION['username'] = $row['username'];//Criamos uma variavel para guardar a session
	header("Location: system.php"); // login realizado com sucesso
}

?>