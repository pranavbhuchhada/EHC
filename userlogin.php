<?php 
require 'config/connection.php';
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
	$result = mysqli_query($conn,"SELECT * FROM `user_login` WHERE `username` = '".$_POST['username']."' AND `password` = '".$_POST['password']."'");
	if ($row = mysqli_fetch_array($result)) {
		session_start();
		$_SESSION["loggedin"] = true;
        $_SESSION["username"] = $row[0];
        $_SESSION["role"] = $row[2];
		if($row[2] == "000"){
			header("Location: client/index.php");
		}
		elseif ($row[2] == "001") {
			header("Location: doctor/index.php");
		}
		elseif ($row[2] == "010") {
			header("Location: pharmacist/index.php");
		}
		elseif ($row[2] == "011") {
			header("Location: laboratorian/index.php");
		}
		else{
			header("Location: index.php");				
		}
	}
	else{
		header("Location: index.php");	
	}
}
else{
	header("Location: index.php");
}

 ?>