<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehc";


$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("Database connection Error");
}
?>	