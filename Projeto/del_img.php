<?php
include("dbh.php");
if (isset($_GET["id"])) {
	$codigo = $_GET["id"];
	$sql = "DELETE FROM tabela_imagens WHERE codigo = '$codigo' ";
	
	$result = mysqli_query($conn,$sql);
	if($result==1){
		header("Location: system.php?resposta=success_exclude"); // sucesso na exclusão da imagem com o codigo
	}else if($result==0){
		header("Location: system.php?resposta=failure_exclude"); 
	}
}

?>