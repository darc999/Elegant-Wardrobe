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
		
	<?php $id= $_GET['ids']; ?>
		
<form  method="POST"  >
	<?php
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `id`='$id' ";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
			echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;  ">' ;?>
			<br>
			<label  for="price"><b>Price :</b></label>
			<label  for="price2"><b><?php echo $row['price'];?></b></label><br>
		
		 	<label  for="stock"><b>Available Stock :</b></label>
			<label  for="stock2"><b><?php echo $row['stock']; ?></b></label><br>
	<?php
		$oldq=$row['stock'];
		$_SESSION['oldq']=$oldq; ?>
	<?php } ?>
	</form>
		
		
	<form method="post" action="calc.php">
		<?php 
		
		$_SESSION['idss']=$id;
		
		?>
			<!--<label  for="ids"><b>ID is ;</b></label>
   			<input  type="text" placeholder="<?php echo $id ?>" name="ids" readonly>-->
			<label  for="quanitity"><b>Enter quanitity</b></label>
   			<input  type="text" placeholder="Enter quanitity" name="quantity" required>
			<button type="submit" name="submit"><h1 class="h11">Check full price</h1></button>
		<?php 
		
		?>
		
	</form>
	
		</section>
</body>
</html>