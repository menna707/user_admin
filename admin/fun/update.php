<?php

	
include ('../../connect.php');
$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE sign_in SET status = '$status' WHERE sid = '$id'  " ;
$conn->query($sql);
header('Location: http://localhost/workfile/admin/search.php');
exit();


	




?>