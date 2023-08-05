
<body><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include('../aheader.php'); ?>
	<h1 class="h1">REGISTER</h1>
	<section class="loginheader">
		<form action="action_page.php" method="POST" id="form" >
 

  <div class="container">
    <label  for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="name" autocomplete="off" required>
    <label  for="ed"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email Address" name="ed" id="ed" autocomplete="off" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" autocomplete="off" required>
    <p id="error_para"></p>
	  <label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="cpsw" id="cpsw" autocomplete="off" required>


    <button type="submit">Register</button>
   
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>
	</section>
</body>
</html>
