<?php
session_start();
include('connection.php');
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$hobbies=$_POST['hobbies'];
$password=$_POST['password'];
mysql_query("INSERT INTO user(name,gender, address,email,password)VALUES('$name', '$gender', '$address', '$email', '$password')");
header("location: signupfinal.php?remarks=success");
mysql_close($con);
?>