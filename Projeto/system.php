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

	<link rel="stylesheet" type="text/css" href="./CSS/system.css">
	<script language="JavaScript" type="text/javascript" src="./JS/system.js"></script>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<style>
	.ui-progressbar {
		position: relative;
	}
	.progress-label {
		position: absolute;
		left: 50%;
		top: 4px;
		font-weight: bold;
		text-shadow: 1px 1px 0 #fff;
	}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
					echo '<div class="alert alert-success" role="alert">Imagem cadastrada com sucesso !</div>';
				}else if($_GET["resposta"]=="failure_register"){
					echo '<div class="alert alert-danger" role="alert">Falha no cadastro da imagem.</div>';
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
		<!--ON-DEMAND para carrega o javascript-->
		<script type="text/javascript">
		loadjscssfile('./JS/systemOn.js','js');
		</script>
		<!--<div class="box"-->
		<div class="panel panel-default">
				<div class="panel-heading" style="background-color: #ffffff;">
					<div class="row">
						<div class="col-xs-6">
						<a href="#" class="active" id="cadastrar_img-form-link">Cadastrar Imagem</a>
						</div>
						<div class="col-xs-6">
							<a href="#"  id="pesquisar_img-form-link">Pesquisar Imagem</a>
						</div>
					</div>
					<hr>
				</div>

				<div class="panel-body">

					<form id="cadastrar_img-form" action="cadastrar_img.php" method="post" enctype="multipart/form-data" style="display: block;">
						<div class="form-group">
							<input name="imagem" type="file" >
						</div>
						<div class="form-group">
							<input type="text" name="nome_img" id="nome_img" tabindex="1" class="form-control" placeholder="Nome da imagem" value="" required>
						</div>
						<div class="form-group">
							<input type="text" name="descricao_img" id="descricao_img" tabindex="1" class="form-control" placeholder="Descrição da imagem" value="" required>
						</div>

						<button type="submit" class="btn-cadastrar" value="salvar">Enviar</button>
					</form>

					<form id="pesquisar_img-form" action="pesquisar_img.php" method="post" enctype="multipart/form-data" style="display: none;">
						<div class="form-group">
							<input type="text" name="nome_img" id="nome_img" tabindex="1" class="form-control" placeholder="Nome da imagem" value="" required>
						</div>

						<button type="submit" class="btn-pesquisar" value="pesquisar">Pesquisar</button>
					</form>



					<br />

					<h4>Imagens Cadastradas</h4>
					<script type="text/javascript" >
					$( function() {
				    var progressbar = $( "#progressbar" ),
				      progressLabel = $( ".progress-label" );

				    progressbar.progressbar({
				      value: false,
				      change: function() {
				        progressLabel.text( progressbar.progressbar( "value" ) + "%" );
				      },
				      complete: function() {
				        progressLabel.hide();
								progressbar.hide();
								$("table").show();
				      }
				    });

				    function progress() {
				      var val = progressbar.progressbar( "value" ) || 0;

				      progressbar.progressbar( "value", val + 2 );

				      if ( val < 99 ) {
				        setTimeout( progress, 80 );
				      }
				    }

				    setTimeout( progress, 5000 );
				  } );


					</script>
					<div id="progressbar"><div class="progress-label">Carregando...</div></div>
					<table hidden="TRUE" border="5">
						<tr>
							<td align="center" class="coluna1" >
								Código
							</td>
							<td align="center" class="coluna2" >
								Nome imagem
							</td>
							<td align="center" class="coluna3" >
								Visualizar imagem
							</td>
							<td align="center" class="coluna4" >
								Descrição
							</td>
							<td align="center" class="coluna5" >
								Excluir imagem
							</td>
						</tr>

						<?php
						include'dbh.php';

						$sql = "SELECT * FROM tabela_imagens";
						$result = mysqli_query($conn,$sql);
					//echo $result;
						while($row = mysqli_fetch_object($result)) { ?>

						<tr>
							<td align="center" class="coluna11" >
								<?php echo $row->codigo ?>
							</td>
							<td align="center" class="coluna22"  >
								<?php echo $row->nome_imagem?>
							</td>
							<td align="center" class="coluna33">
								<div class="row">
									<div class="col-xs-6 col-md-3">
										<a href="#" class="thumbnail">
											<?php echo '<img src="ver_img.php? id='.$row->codigo.'">'; ?>
										</a>
									</div>
								</div>

							</td>
							<td align="center"  class="coluna44" >
								<?php echo $row->descricao?>
							</td>

							<td align="center" class="coluna55">
								<?php echo '<a href="del_img.php?id='.$row->codigo.'">Excluir</a>'; ?>
							</td>

						</tr>
						<?php } ?>

					</table>


				</div>

		</div>
</div>

		<br/>

	</body>
	</html>
