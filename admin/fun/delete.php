<?php

	
include ('../../connect.php');
$id = $_GET['id'];


$sql = "DELETE FROM sign_in  WHERE sid = '$id'  " ;
$conn->query($sql);
header('Location: http://localhost/workfile/admin/search.php');
exit();


	




?>