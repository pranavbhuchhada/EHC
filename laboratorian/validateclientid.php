<?php 
session_start();
if (isset($_REQUEST['cusername'])) {
	require '../config/connection.php';
	$cusername = $_REQUEST['cusername'];
	$result = mysqli_query($conn,"SELECT `username` FROM `userinfo` WHERE `username` = '".$cusername."'");
	if (mysqli_fetch_array($result)) {
		$_SESSION['cusername'] = $cusername;
	}else{
		unset($_SESSION['cusername']);
	}
}else{
	unset($_SESSION['cusername']);
}
?>
<script type="text/javascript">
	window.location.href = "index.php";
</script>