<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apple</title>
	<meta name="author" content="Gabriela e Gabriel" ></meta>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="shortcut icon" href="resources/images/favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="./CSS/system.css"/>

</head>
<body>
	<div class="wrapper">

		<!--Container da navBar -->
		<div class="nav">
			<ul class="container">

				<li class="screen1"><a href="home.php"><img src="resources/images/apple.PNG" alt="Apple" style="width:19px;height:21px"></a></li>

				<li class="screen-apple"><a href="home.php"><img src="resources/images/apple.PNG" alt="Apple" style="width:19px;height:21px"></a></li>

			</ul>

		</div>

		<h3 style="margin-left: 10%;">
		<?php
			//verifica se a url tem um nome
		if(isset($_SESSION['username'])){
			echo 'Olá '. $_SESSION['username'] ;
		}
		?>
		</h3>
		<h4  style="margin-left: 10%;">Utilize esta página para modificar as imagens promocionais que são exibidas na Home.</h4>

		<!--verifica se a pagina é carregada com alguma resposta na tentativa de login/registro-->
		<div class="warning">
			<?php
			//verifica se a url tem uma resposta
			if(isset($_GET["resposta"])){
				if($_GET["resposta"]=="success_register"){
					echo '<div class="alert alert-success" role="alert">Cadasto realizado com sucesso !</div>';
				}else if($_GET["resposta"]=="failure_register"){
					echo '<div class="alert alert-danger" role="alert">Cadastro não realizado..</div>';
				}else if($_GET["resposta"]=="naopassouid"){
					echo '<div class="alert alert-danger" role="alert">O ID DA IMAGEM NAO FOI </div>';
				}else if($_GET["resposta"]=="failure_exclude"){
					echo '<div class="alert alert-danger" role="alert">Falha na exclusão da imagem.</div>';
				}else if($_GET["resposta"]=="success_exclude"){
					echo '<div class="alert alert-success" role="alert">Imagem excluida !</div>';
				}
			}
			?>
		</div>

		<!--<div class="box">-->
		<div class="panel panel-default">
			<div class="panel-body">
				<h4>Escolher imagens</h4>

				<!--Formulario de envio de imagens-->
				<form  action="image.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input name="imagem" type="file">
					</div>
					<div class="form-group">
						<input type="text" name="nome_img" id="nome_img" tabindex="1" class="form-control" placeholder="Imagem nome" value="" required>
					</div>
					<div class="form-group">
						<input type="text" name="descricao_img" id="descricao_img" tabindex="1" class="form-control" placeholder="Descrição" value="" required>
					</div>


					<button type="submit" class="btn btn-default" value="Salvar">Enviar</button>
				</form>

				<br />

				<h4>Imagens Cadastradas</h4>
				<!--buscar de imagens-->
				<form  method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="pesquisa_img" id="pesq_img" tabindex="1" class="form-control" placeholder="Pesquisar image" value="" required>
					</div>

				</form>
				<table border="5">
					<tr>
						<td align="center" class="coluna1" style="width:5% ">
							Código
						</td>
						<td align="cente" style="width:15%">Nome imagem</td>
						<td align="center" class="coluna2" style="width:25% ">
							Visualizar imagem
						</td>
						<td align="center" style="width:15%">Descrição</td>
						<td align="center" class="coluna3" style="width:15% ">
							Excluir imagem
						</td>
					</tr>
					<div id="progressbar">
						<div id="bar">
						</div>
					</div>
					<button onclick="move()">Click Me</button>

					<script>
						function move() {
						  var elem = document.getElementById("myBar");
						  var width = 1;
						  var id = setInterval(frame, 10);
						  function frame() {
						    if (width >= 100) {
						      clearInterval(id);
						    } else {
						      width++;
						      elem.style.width = width + '%';
						    }
						  }
						}
					</script>
					<?php
					include'dbh.php';

					$sql = "SELECT * FROM tabela_imagens";
					$result = mysqli_query($conn,$sql);
					//echo $result;
					while($row = mysqli_fetch_object($result)) { ?>

					<tr>
						<td align="center" class="coluna11" style=" width:5% ">
						<?php echo $row->codigo ?>
						</td>
						<td align="center" class="coluna27" style="width:15%;text-align:center" >
							<?php echo $row->nome_img?>
						</td>
						<td align="center" class="coluna22" style=" width:25% ; text-align: center; height:50px">
							<div class="row">
								<div class="col-xs-6 col-md-3">
									<a href="#" class="thumbnail">
										<?php echo '<img src="ver_img.php? id='.$row->codigo.'">'; ?>
									</a>
								</div>
							</div>

						</td>
						<td align="center" style="width:25%;textalign:center">
							<?php echo $row->descricao?>
						</td>

						<td align="center" class="coluna33" style=" width:15% ">
							<?php echo '<a href="del_img.php?id='.$row->codigo.'">Excluir</a>'; ?>
						</td>

					</tr>
					<?php } ?>

				</table>


			</div>

		</div>


		<br/>
	</body>
	</html>
