<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Apple</title>
	<meta name="author" content="Gabriela e Gabriel"></meta>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="home.css" />
	<link rel="shortcut icon" href="resources/images/favicon.ico">
</head>

<body>
	<div class="wrapper">
		<div class="nav">
			<ul class="container">
				<li class="screen1">
					<a href="index.php"><img src="resources/images/menu.PNG" alt="Menu" style="width:19px;height:21px"></a>
				</li>
				<li class="screen1">
					<a href="#Apple"><img src="resources/images/apple.PNG" alt="Apple" style="width:19px;height:21px"></a>
				</li>
				<li class="screen1"><a href="#Mac">Mac</a></li>
				<li class="screen1"><a href="#iPad">Ipad</a></li>
				<li class="screen1"><a href="#Iphone">Iphone</a></li>
				<li class="screen1"><a href="#Watch">Watch</a></li>
				<li class="screen1"><a href="#Tv">Tv</a></li>
				<li class="screen1"><a href="#Music">Music</a></li>
				<li class="screen1"><a href="#Support">Support</a></li>
				<li class="screen1">
					<a href="#Search"><img src="resources/images/search.PNG" alt="Search" style="width:18px;height:18px"></a>
				</li>
				<li class="screen1">
					<a href="#Shop"><img src="resources/images/shop.PNG" alt="Shop" style="width:16px;height:20px"></a>
				</li>
				<li class="screen-menu">
					<a href="index.php"><img src="resources/images/menu.PNG" alt="Menu" style="width:19px;height:21px"></a>
				</li>
				<li class="screen-apple">
					<a href="#Apple"><img src="resources/images/apple.PNG" alt="Apple" style="width:19px;height:21px"></a>
				</li>
				<li class="screen-shop">
					<a href="#Shop"><img src="resources/images/shop.PNG" alt="Shop" style="width:19px;height:21px"></a>
				</li>
			</ul>
		</div>


		<!--imagem rotativas-->
		<div class="telarodativa">
		</div>
		<!--imagens publicitarias-->
		<?php
		include'dbh.php'; 

		$sql = "SELECT * FROM tabela_imagens ORDER BY codigo DESC LIMIT 0, 1;";
		$result = mysqli_query($conn,$sql);
		$row1 = mysqli_fetch_object($result); 

		$sql = "SELECT * FROM tabela_imagens ORDER BY codigo DESC LIMIT 1, 2;";
		$result = mysqli_query($conn,$sql);
		$row2 = mysqli_fetch_object($result);

		$sql = "SELECT * FROM tabela_imagens ORDER BY codigo DESC LIMIT 2, 3;";
		$result = mysqli_query($conn,$sql);
		$row3 = mysqli_fetch_object($result);

		$sql = "SELECT * FROM tabela_imagens ORDER BY codigo DESC LIMIT 3, 4;";
		$result = mysqli_query($conn,$sql);
		$row4 = mysqli_fetch_object($result);

		?>
		<div class="promos_wwdc"> <?php echo '<img src="ver_img.php? id='.$row1->codigo.'">'; ?> </div>
		<div class="promos_mackbook"> <?php echo '<img src="ver_img.php? id='.$row2->codigo.'">'; ?> </div>
		<div class="promos_acessories"> <?php echo '<img src="ver_img.php? id='.$row3->codigo.'">'; ?> </div>
		<div class="promos_suppliers"> <?php echo '<img src="ver_img.php? id='.$row4->codigo.'">'; ?> </div>

		

		<!--Ródape-->
		<div class=" columns">
			<div class="links1">
				<ul>
					<li class="links2"><a href="#Shop and learn">Shop and learn</a></li>
					<div class="hr2">
						<hr />
					</div>
					<li class="links2"><a href="#Apple Store">Apple Store</a></li>
					<div class="hr2">
						<hr />
					</div>
					<li class="links2"><a href="#For Education">For Education</a></li>
					<div class="hr2">
						<hr />
					</div>
					<li class="links2"><a href="#For Business">For Business</a></li>
					<div class="hr2">
						<hr />
					</div>
					<li class="links2"><a href="#Account">Account</a></li>
					<div class="hr2">
						<hr />
					</div>
					<li class="links2"><a href="#Apple Values">Apple Values</a></li>
					<div class="hr2">
						<hr />
					</div>
					<li class="links2"><a href="#About Apple">About Apple</a></li>
					<div class="hr2">
						<hr />
					</div>
				</ul>
			</div>
			<div class="shop-alinhamento">
				<ul>Shop and learn
					<li>Mac</li>
					<li>iPad</li>
					<li>iPhone</li>
					<li>Watch</li>
					<li>TV</li>
					<li>Music</li>
					<li>iTunes</li>
					<li>iPod</li>
					<li>Accessories</li>
					<li>Gift Card</li>
				</ul>
			</div>
			<div class="app-alinhamento">
				<ul>Apple Store
					<li>Find a Store</li>
					<li>Genius Bar</li>
					<li>Workshops and Learning</li>
					<li>Youth Programs</li>
					<li>Apple Store App</li>
					<li>Refurbished and Clearance</li>
					<li>Financing</li>
					<li>Reuse and Recycling</li>
					<li>Order Status</li>
					<li>Shopping Help</li>
				</ul>
			</div>
			<div class="edu-alinhamento">
				<ul>For Education
					<li>Apple and Education</li>
					<li>Shop for College</li>
				</ul>
				<ul>For Business
					<li>Apple and Business</li>
					<li>Shop for Business</li>
				</ul>
			</div>
			<div class="conta-alinhamento">
				<ul>Account
					<li>Manage Your Apple ID</li>
					<li>Apple Store Account</li>
					<li>iCloud.com</li>
				</ul>
				<ul>Apple Values
					<li>Accessibility</li>
					<li>Education</li>
					<li>Environment</li>
					<li>Inclusion and Diversity</li>
					<li>Privacy</li>
					<li>Suppleir Responsibility</li>
				</div>
				<div class="sobre-alinhamento">
					<ul>About Apple
						<li>Apple Info</li>
						<li>Newsroom</li>
						<li>Job Opportunities</li>
						<li>Press Info</li>
						<li>Investors</li>
						<li>Events</li>
						<li>Contact Apples</li>
					</ul>
				</div>
			</div>
			<div class="footer">
				<div class="foot1">More ways to shop: Visit an <a href="#Apple">Apple</a> Store, call 1-800-MY-APPLE, or <a href="#find a reseller">find a reseller</a>.</div>
				<!--<br/>-->
				<div class="hr1">
					<hr />
				</div>
				<div class="foot2">Copyright © 2017 Apple Inc. All rights reserved.
					<span class="foot3"><a href="#Privacy Policy">Privacy Policy</a> | <a href="#Terms of Use">Terms of Use</a> | <a href="#Sales and Refunds">Sales and Refunds</a> | <a href="#Legal ">Legal</a> | <a href="#Site Map">Site Map</a></span>
					<img src="resources/images/usa.PNG" alt="USA flag"> <a href="#United States">  United States</a>
				</div>
			</div>
			<br/>
		</div>
	</body>

	</html>
