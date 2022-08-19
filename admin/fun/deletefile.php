<?php
include ('../../connect.php');
$id = $_GET['id'];
$nameoffile=$_GET['nameoffile'];
$pathoffile="../uploaded_files/".$nameoffile;
//to remove file from uploaded file
unlink($pathoffile);

$sql = "DELETE FROM addfile  WHERE fid = '$id'  " ;
$conn->query($sql);
header('Location: http://localhost/workfile/admin/fun/searchinfile.php');
exit();







?>