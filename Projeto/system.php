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

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="./CSS/system.css"/>
	<script language="JavaScript" type="text/javascript" src="./JS/system.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">

		<!--Container da navBar -->
		<div class="nav">
			<ul class="container">

				<li class="screen1"><a href="home.html"><img src="resources/images/apple.PNG" alt="Apple" style="width:19px;height:21px"></a></li>

				<li class="screen-apple"><a href="home.html"><img src="resources/images/apple.PNG" alt="Apple" style="width:19px;height:21px"></a></li>

			</ul>

		</div>

		<div class="box">
		<?php
			//verifica se a url tem um nome
			if(isset($_SESSION['username'])){
					echo 'Welcome '. $_SESSION['username'] ;
			}
		?>
    <form enctype="multipart/form-data" action="upload.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
    <div><input name="nome_evento" type="text"/></div>
    <div><input name="descricao_evento" type="textarea"/></div>
    <div><input name="imagem" type="file"/></div>
    <div><input type="submit" value="Salvar"/></div>
    </form>
    <br />
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
	<script type="text/javascript" src="./JS/system.js"></script>
</body>
</html>
