<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="login.css" rel="stylesheet" type="text/css">
    <title>Login Form</title>
</head>
<body>


	<?php include('../aheader.php'); ?>	
<section class="loginheader">
	<h1 class="h1">CUSTOMER LOGIN</h1>
<!-- Login Form Start -->
<div class="login_form overlay">
<form  method="POST" action="customerlogaction.php" >
 <div class="container">
    <label  for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="cusername" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="cpassword" required>

    <button type="submit" name="submit">Login</button>
   
  </div>
</div>
</div>
	</section>
</body>
</html>