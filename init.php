<?php

$host = "localhost";
$db_user = "anurag";
$db_password = "anurag";
$db_name = "user_db";

$con = mysqli_connect($host ,$db_user ,$db_password,$db_name);
 
 if($con)
 {
	 echo "Connection successful";
 }
 else
 {
	 echo "Connection failed";
 }


?>