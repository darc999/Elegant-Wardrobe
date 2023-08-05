<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Checkout</title>
	<link href="../Mylogin/login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include('../aheader.php'); ?>	
	
	<section class="loginheader">
		
	<?php //$id= $_GET['ids'] ?>
		
	<form  method="POST"  >
	
			<br>
			<label  for="price"><b>Price :</b></label>
			<label  for="price2"><b></b></label><br>
		 	<label  for="stock"><b>Available Stock :</b></label>
			<label  for="stock2"><b></b></label><br>
			<label  for="quanitity"><b>Enter quanitity</b></label>
   			<input  type="text" placeholder="Enter quanitity" name="quantity" required>
			<button type="submit" name="submit"><h1 class="h11">Check full price</h1></button>
			<label  for="fprice"><b>Full Price is : RS.</b></label>
			<label  for="fprice2"><b> </b></label><br>
			<label for="Cname"><b>Credit Card NO:</b></label>
   			<input type="text" placeholder="Enter Name" name="cname" required>
			<button type="submit" name="submit2"><h1 class="h11">Purchase</h1></button>
			</form>
		</section>
</body>
</html>