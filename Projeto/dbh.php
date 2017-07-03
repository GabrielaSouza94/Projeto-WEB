<?php
$conn = mysqli_connect("mysql.hostinger.com.br","u772927009_root","135146","u772927009_web");/*("servidor", "username", "password", "database name")*/
/*if something  went wrong in the connection*/
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>
