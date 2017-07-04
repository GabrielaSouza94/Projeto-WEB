
<?php
	include("dbh.php");
	$valor = $_GET['valor'];

	//querry para busca da img
	$sql = mysql_query("SELECT * FROM imagem WHERE id LIKE '%".$valor."%'");

	while ($imagem = mysql_fetch_object($sql)) {
		echo "<a href=\"javascript:func()\" onclick=\"exibeIMG('".$imagem->id."')\">" "</a><br />";
	}
	header("Content-Type: text/html; charset=ISO-8859-1",true);
?>
