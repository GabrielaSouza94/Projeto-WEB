<?php

include("dbh.php");
if (isset($_GET["id"])) {
	$codigo = $_GET["id"];

	$sql = "SELECT * FROM tabela_imagens WHERE codigo = '$codigo' ";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($result);
	echo $row->imagem;
	//EXIBEIMAGEM
	header("Content-type: image/gif");
	
}else{
	header("Location: system.php?resposta=naopassouid");
}
?>
