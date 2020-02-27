<?php 
require 'config/connection.php';
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
	$result = mysqli_query($conn,"SELECT * FROM `user_login` WHERE `username` = '".$_POST['username']."' AND `password` = '".$_POST['password']."'");
	if ($row = mysqli_fetch_array($result)) {
		if($row[2] == "000"){
			header("Location: client/index.php?username=".$_POST['username']);
		}
		elseif ($row[2] == "001") {
			header("Location: doctor/index.php?username=".$_POST['username']);
		}
		elseif ($row[2] == "010") {
			header("Location: pharmacist/index.php?username=".$_POST['username']);
		}
		elseif ($row[2] == "011") {
			header("Location: laboratorian/index.php?username=".$_POST['username']);
		}
	}
	else{
		// echo "ERROR 1";
		header("Location: index.php");	
	}
}
else{
	// echo "ERROR 2";
	header("Location: index.php");
}

 ?>