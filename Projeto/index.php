<!DOCTYPE html>
<html>
<head>
	<title>Apple</title>
	<meta name="author" content="Gabriela e Gabriel" ></meta>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="shortcut icon" href="resources/images/favicon.ico">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="./CSS/index.css"/>
	<script language="JavaScript" type="text/javascript" src="./JS/index.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
		<!--verifica se a pagina é carregada com alguma resposta na tentativa de login/registro-->
		<div class="warning">
		<?php
			//verifica se a url tem uma resposta
			if(isset($_GET["resposta"])){
				if($_GET["resposta"]=="success_register"){
					echo '<div class="alert alert-success" role="alert">Cadasto realizado com sucesso !</div>';
				}else if($_GET["resposta"]=="failure_register"){
					echo '<div class="alert alert-danger" role="alert">Cadastro não realizado. Email já cadastrado no sistema.</div>';	
				}else if($_GET["resposta"]=="password_fail_register"){
					echo '<div class="alert alert-warning" role="alert">As senhas não conferem. Tente novamente.</div>';	
				}else if($_GET["resposta"]=="failure_login"){
					echo '<div class="alert alert-warning" role="alert">Email ou senha incorretos.</div>';	
				}
			}
		?>
		</div>
		<!--Container de login -->
		<div class="container2">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">

						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="#"  id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">

									<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
										</div>
										<div class="form-group text-center">
											<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
											<label for="remember"> Remember Me</label>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
										
									</form>


									<form id="register-form" action="register.php" method="post" role="form" style="display: none;">
										<div class="form-group">
											<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
										</div>
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
										</div>
										<div class="form-group">
											<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!--FOOTER-->
		<div class="footer">

			<div class="foot1">More ways to shop: Visit an <a href="#Apple">Apple</a> Store, call 1-800-MY-APPLE, or <a href="#find a reseller">find a reseller</a>.</div>

			<div class="hr1"><hr /></div>

			<div class="foot2">Copyright © 2017 Apple Inc. All rights reserved. 


				<span class="foot3"><a href="#Privacy Policy">Privacy Policy</a> | <a href="#Terms of Use">Terms of Use</a> | <a href="#Sales and Refunds">Sales and Refunds</a> | <a href="#Legal ">Legal</a> | <a href="#Site Map">Site Map</a></span>

				<img src="resources/images/usa.PNG" alt="USA flag" > <a href="#United States">  United States</a> 

			</div>
		</div>
		<br/>
		

	</div>
	<script type="text/javascript" src="./JS/index.js"></script>
</body>
</html>