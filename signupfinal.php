<html>
<body>
<h1> Welcome!Fill this form to signup.</h1>

<form action="connection.php" method="post" name="signupform">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
    <td width="95"><div align="right"> name:</div></td>
    <td width="171"><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td><div align="right">gender:</div></td>
    <td><input type="radio" name="gender" value="female">female</td>
    <td><input type="radio" name="gender" value="male">male</td>
    
  </tr>
  <tr>
    <td><div align="right">address:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right">email:</div></td>
    <td><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td><div align="right">hobbies:</div></td>
    <td><textarea name="hobbies" rows="4" cols="30"></textarea></td>
  </tr>
 <tr>
    <td><div align="right">password:</div></td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
  <tr>
  <td align="right">
  <?php

   if(isset($_GET['msg']))
   {
    $message = $_GET['msg'];                                       // to display message on successful entry
    if($message ==1)
      echo " Your entry has been successfully registered!!!!";

   } 
   ?>
   </td>
   </tr>
</table>
</form></body>
</html>

