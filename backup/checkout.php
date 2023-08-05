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
		
	<?php $id= $_GET['ids'] ?>
		
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
	</form>
		
		<form method="POST"  >
			<label  for="ids"><b>Id is;</b></label>
			<input  type="text" placeholder="<?php echo $id ?>" name ="ids" required>
			<label  for="quanitity"><b>Enter quanitity</b></label>
   			<input  type="text" placeholder="Enter quanitity" name="quantity" required>
			<button type="submit" name="submit"><h1 class="h11">Check full price</h1></button>
			<?php
		if(isset($_POST["submit"])){
		$quantity=$_POST["quantity"];
		$price=$row['price'];
		$fprice=$quantity*$price;
			?>
			
			<label  for="fprice"><b>Full Price is : RS.</b></label>
			<label  for="fprice2"><b> <?php echo $fprice;?></b></label><br>
			<label for="Cname"><b>Credit Card NO:</b></label>
			
   			<input type="text" placeholder="Enter Name" name="cname" required>
			<?php //$Cnum=$_POST['cname']; ?>
			<button type="submit" name="submit2"><h1 class="h11">Purchase</h1></button>
			<?php 
			if(isset($_POST["submit2"])){
			$newquantity=$row['stock']-$quantity;
			?><label  for="Cnamee"><b><?php echo $newquantity; ?></b></label><br>
				<?php
			}
			?>
			
		<?php }?>
			</form>
		<?php }?>
		
		</section>
</body>
</html>