<?php

include("dbh.php");
if (isset($_GET["nome"])) {
	$codigo = $_GET["nome"];

	$sql = "SELECT * FROM tabela_imagens WHERE nome_imagem = '$nome' ";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($result);
	echo $row->imagem;
	//EXIBEIMAGEM
	header("Content-type: image/gif");

}else{
	header("Location: system.php?resposta=naopassouinome");
}
?>
