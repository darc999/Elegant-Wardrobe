<?php include('../config/constants.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
	<link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Login Form Start -->
<div class="login_form overlay">
<form  method="POST" action="" >
<div class="center">
 
  <?php

    if (isset($_SESSION['login'])) 
     {
      echo $_SESSION['login']; // Display session login message
      unset($_SESSION['login']); // Hide session login message
      }
    
      if (isset($_SESSION['not_login'])) 
      {
       echo $_SESSION['not_login']; // Display session not_login message
       unset($_SESSION['not_login']); // Hide session not_login message
       }

  ?>
	<?php include('../aheader.php'); ?>
	
	<h1 class="h1">LOGIN</h1>
	<section class="loginheader">
		<form action="" method="post">
 

  <div class="container">
    <label  for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="submit">Login</button>
   
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>
	</section>
</body>
</html>
	<?php 

// Check the submit is clicked
if(isset($_POST['submit'])){

    // Get the data from Login Form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQl query to check username and password exist in the database
    $sql = "SELECT * FROM loginadmin WHERE username = '$username' AND password = '$password'";
	$sql = "SELECT * FROM user_table WHERE username = '$username' AND password = '$password'";

    // Execute the Query
    $result = mysqli_query($conn,$sql);

    // Count the rows to check users exists
    $count = mysqli_num_rows($result);

    if($count==1)
    {
        // User available
        $_SESSION['login'] = "<div class='success'> Admin Login Successful.</div>";
        $_SESSION['user'] = $username; // check user logged into the system or not
         //Redirect to Index page
         header('location:'.SITE_URL.'index.php');

    }
    else{
        // User not available
        $_SESSION['login'] = "<div class='error'>  Username or Password Incorrect. </div>";
        //Redirect to login page
        header('location:'.SITE_URL.'Mylogin.php');

    }

}
else 
{ 

}




?>
