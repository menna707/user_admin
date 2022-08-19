<?php
include ('../connect.php');


	$email=$_POST['email'];
$password= $_POST['password'];

$query = "SELECT * FROM sign_in  WHERE email = '$email'  AND password = '$password' ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$count = $result->num_rows;






if(isset($email)&&isset($password))
{

   if($count>0)
     {
     	session_start();
     	$_SESSION['email']=$email;



        header('Location: http://localhost/workfile/index.php');

        exit();
     }
else{

	header('Location: http://localhost/workfile/login.php');
}
 }
     if(empty($email)||empty($password))
     {


header('Location: http://localhost/workfile/login.php');

     }
?>