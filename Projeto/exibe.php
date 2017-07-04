<?php

include("imagem.php");
$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM noticias WHERE id = '".$id."'");
$imagens = mysql_fetch_object($sql);

echo $imagens->imagem;
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>
