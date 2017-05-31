<?php
session_start();
include("dbh.php");
$imagem = $_FILES["imagem"]; //carrega o arquivo de imagem na forma de um vetor de bytes
//$maxsize = $_POST["MAX_FILE_SIZE"]; //carrega um valor pré estabelecido maximo para o tamanho das imagens

 if($imagem != NULL) {  //verifica se teve uma imagem carregada

 	$nomeFinal = time().'.jpg';

 	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {

		$tamanhoImg = filesize($nomeFinal); //guarda numa variael o tamanho do arquivo da imagem para armazená-la no banco

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 

		$sql = "INSERT INTO tabela_imagens (imagem) VALUES ('$mysqlImg')";

		$result = mysqli_query($conn,$sql);

		unlink($nomeFinal);

		if($result==1){
			header("Location: system.php?resposta=success_register"); // retorna para o system.php carregando o get com resposta de sucesso no cadastro da imagem
		}else if($result==0){
			header("Location: system.php?resposta=failure_register"); //fracasso no cadastro da imagem
		}
	}else 
		header("Location: system.php?resposta=oversized");  // não cadastra a imagem no banco e retorna um aviso de tamanho excedido
}else
	header("Location: system.php?resposta=nada"); //fracasso em carregar a imagem

	?>
