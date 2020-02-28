<?php 
require '../config/connection.php';
$username = $_REQUEST['username'];
$rname = strtolower($_REQUEST['rname']);
$id = strtolower($_REQUEST['id']);
$result = mysqli_query($conn,"SELECT * FROM $rname WHERE `username` = '".$username."' AND `id` = $id");
if ($row = mysqli_fetch_assoc($result)) {
	echo json_encode($row);
}
else{
	echo json_encode("no");
}
?>