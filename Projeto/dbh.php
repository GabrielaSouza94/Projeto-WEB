<?php
$conn = mysqli_connect("localhost","root","","login_data");/*("servidor", "username", "password", "database name")*/
/*if something  went wrong in the connection*/
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>
