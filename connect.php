<?php
$servername='localhost';
$username='root';
$pass='';
$dbname='workfile';

$conn = new mysqli($servername,$username,$pass,$dbname);
if ($conn->connect_error)
{

	die('error in connection');

}

//echo "you are connected";

?>