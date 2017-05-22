<?php

$username = $_POST['username'];
$password = $_POST['password'];     //pass the values from the form 


$username = stripcslashes($username);
$password = stripcslashes($password);                     //to prevent mysql injection.
$username = mysql_real_escape_string($username);
$username = mysql_real_escape_string($password);

mysql_connect("localhost", "root", "","signup");   // connecto server and select database.
mysql_select_db("signup");

$result = mysql_query("select * from user where username = '$username' and password = '$password' ")
             or die("Failed to query database" .mysql_error());

$row = mysql_fetch_array($result);

if($row['username'] ==$username && $row['password'] == $password)
   {
   	echo "login successful!!Welcome  " .$row['username'];

   }
else
{
	echo "Failed to login";
}

?>



