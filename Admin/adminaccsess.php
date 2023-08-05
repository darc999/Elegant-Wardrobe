<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../Mylogin/login.css" rel="stylesheet" type="text/css">
	
<title>Admin Access</title>
</head>

<body>
	<?php include('../aheader.php'); ?>	
	<section class="adminshow">
	<form  method="POST" action="action_page.php" >
	<button type="submit" name="submit"><h1 class="h11">Show Admin table</h1></button>
	</form>
	</section>
	<br>
	<br>
	<br>
	<br>
	<section class="adminadd">
		<form  method="POST" action="adminadd.php" >
			<button type="submit" name="submit2"><h1 class="h11">Add an Admin</h1></button>
		 	<label  for="uname"><b>Admin Name</b></label>
   			 <input  type="text" placeholder="Enter Username" name="admin" required>
			  <label  for="uname"><b>Admin Password</b></label>
   				 <input  type="text" placeholder="Enter Password" name="adminp" required>
			</form>
		</section>
			<br>
			<br>
			<br>
			<br>
			<section class="admindel">
				<form  method="POST" action="admindel.php" >
	<button type="submit" name="submit3"><h1 class="h11">Delete an Admin</h1></button>
			<label  for="uname"><b>Admin Delete</b></label>
			<input  type="text" placeholder="Enter Admin Name" name="admind" required>
				</form>
	</section>
</body>
</html>