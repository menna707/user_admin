<?php
include ('../connect.php');

$user_name = $_POST['user_name'];
$birth_date = $_POST['birth_date'];
$email= $_POST['email'];

$query = "SELECT * FROM sign_in  WHERE email = '$email'  ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$count = $result->num_rows;


   if($count>0)
   {


header('Location:http://localhost/workfile/sign%20in%20.php?q=1');
exit();


   }


$phone = $_POST['phone'];
$sex=$_POST['sex'];
$password = $_POST['password'];

if(empty($user_name)||empty($birth_date)||empty($email)||empty($phone)||empty($sex)||empty($password))
{
	
echo "all data are required";
header('Location:http://localhost/workfile/sign%20in%20.php');

}
else
{
session_start();
     	$_SESSION['email']=$email;

$sql = "INSERT INTO sign_in (user_name,birth_date,email,phone,sex,password,status) VALUES ('$user_name','$birth_date','$email','$phone','$sex','$password' ,'user')";
if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";zzzz
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: http://localhost/workfile/index.php');
exit();
}


	




?>