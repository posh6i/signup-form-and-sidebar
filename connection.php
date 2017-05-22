<?php
$con = mysqli_connect('localhost', 'root', '','signup');  //servername,username,password and database name taken as the parameters.
       
      $name= mysqli_real_escape_string($con, $_POST['name']);
      $address=mysqli_real_escape_string($con, $_POST['address']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $gender=mysqli_real_escape_string($con, $_POST['gender']);
      $hobbies=mysqli_real_escape_string($con, $_POST['hobbies']);
      $password=mysqli_real_escape_string($con, $_POST['password']);
      $query = "INSERT INTO user(name,gender,address,email,password)VALUES('$name', '$gender', '$address', '$email', '$password')";
      if (!mysqli_query($con , $query))
      {
        echo "Error" .mysqli_error($con);
       }
      else
      {
    
    header("location: signupfinal.php?msg=1");	    //msg is to send value to signupfinal so as to display suucessful registration.
       }   

?>


