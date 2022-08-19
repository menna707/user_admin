<?php
include ('../../connect.php');
session_start();
$type=$_POST['type'];
$address=$_POST['address'];
$subject=$_POST['subject'];
$ftime=date('Y-m-d H:i:s');
$user=$_SESSION['email'];
$file = $_FILES['file'];
$filename=$file['name'];
$filenametemp=$file['tmp_name'];
$filepath='../uploaded_files';

move_uploaded_file($filenametemp, $filepath."/".$filename);
$sql = "INSERT INTO addfile (type,user,ftime,address,subject,attachment	) VALUES ('$type','$user','$ftime','$address','$subject','$filename' )";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: http://localhost/workfile/admin/fun/addfile.php');
exit();







?>