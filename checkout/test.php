<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<form method="POST"  >
			
			
			<label  for="quanitity"><b>Enter quanitity</b></label>
   			<input  type="text" placeholder="Enter quanitity" name="quantity" required>
			<button type="submit" name="submit"><h1 class="h11">Check full price</h1></button>
			<?php
		if(isset($_POST["submit"])){
		$quantity=$_POST["quantity"];
			?><label  for="fprice"><b>Full Price is :</b></label>
			<label  for="fprice2"><b> fulllllllll<?php echo $quantity;?></b></label><br>
			<button type="submit" name="submit2"><h1 class="h11">Purchase</h1></button>
			</form>
		<?php }
			?>
	
			
<body>
</body>
</html>