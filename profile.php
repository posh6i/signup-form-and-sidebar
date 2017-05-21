<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
Welcome : <?php echo $login_session; ?>
<a href="logout.php">Log Out</a>
</body>
</html>