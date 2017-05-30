<?php
session_start();
include 'dbh.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirm-password'];


if($password == $confirmpassword){  //se as senhas conferem
	$sql = "INSERT INTO users (email,username, password) VALUES ('$email','$username','$password')"; //guarda o comando sql para criar um novo usuário com os parâmetros pegos atavés do POST

	$result = mysqli_query($conn,$sql);
	//echo "$result" . "resultado";
	if($result==1){
		header("Location: index.php?resposta=success_register"); // retorna para o index.php carregando o get com resposta de sucesso no cadastro
	}else if($result==0){
		header("Location: index.php?resposta=failure_register"); // retorna para o index.php carregando o get com resposta de fracasso no cadastro
	}
}else{
	header("Location: index.php?resposta=password_fail_register"); // retorna para o index.php carregando o get com resposta de erro na senha
}

?>

