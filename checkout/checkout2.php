<!doctype html>
<html>
<head><?php 
	session_start();?>
<meta charset="utf-8">
<title>Checkout</title>
	<link href="../Mylogin/login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include('../aheader.php'); ?>	
	
	<section class="loginheader">
		
	<?php $full= $_GET['full']; ?>
	<?php 
		
		$_SESSION['full']=$full;
		
		?>	
		<h1 class="h1">Order Online </h1>
	<form method="post" action="sendcredit.php">
			<label  for="fprice"><b>Full Price is : RS.</b></label>
			<label  for="fprice2"><b> <?php echo $full ?> </b></label><br>
			<label for="name"><b>User Name:</b></label>
   			<input type="text" placeholder="Enter Name" name="name" required>
			<label for="Cname"><b>Credit Card NO:</b></label>
   			<input type="text" placeholder="Enter Number" name="cname" required>
			<button type="submit" name="submit"><h1 class="h11">Purchase</h1></button>
		
			</form>
		<h1 class="h1"> Deliver To Home </h1>
			
		<form method="post" action="homedeli.php">
			<label  for="fprice"><b>Full Price is : RS.</b></label>
			<label  for="fprice2"><b> <?php echo $full ?> </b></label><br>
			<label for="name"><b>User Name:</b></label>
   			<input type="text" placeholder="Enter Name" name="name" required>
			<label for="adress"><b>Address:</b></label>
   			<input type="text" placeholder="Enter Number" name="Address" required>
			<button type="submit" name="submit"><h1 class="h11">Purchase</h1></button>
		</form>
		</section>
</body>
</html>