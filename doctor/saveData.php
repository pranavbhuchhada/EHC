<?php 
require '../config/connection.php';
$newData = htmlspecialchars($_REQUEST["newData"]);
$username = $_REQUEST["username"];
$id = $_REQUEST["id"];
$resqult = mysqli_query($conn,"UPDATE `dashboard` SET `".$id."`='".$newData."' WHERE `username` = '".$username."'");
 ?>