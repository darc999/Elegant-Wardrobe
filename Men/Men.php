<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MEN</title>
	<link href="mencss.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include('aheader.php'); ?>
<h1>Men Section</h1>
<h2> Shirts</h2>
<div class="imgs" >
	<!--<img src="imgs/shirt/4 (1).jpg">
	<img src="imgs/shirt/4 (2).jpg">
	<img src="imgs/shirt/4 (3).jpg">
	<img src="imgs/shirt/4 (4).jpg">
	<img src="imgs/shirt/4 (5).jpg">
	<img src="imgs/shirt/4 (6).jpg">
	<img src="imgs/shirt/4 (7).jpg">
	<img src="imgs/shirt/4 (8).jpg">
	<img src="imgs/shirt/4 (9).jpg">
	<img src="imgs/shirt/4 (10).jpg">-->
	<?php
	
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `genre`='Shirt' AND `user`='Men'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		$id=$row['id'];
		//echo $id;
		?><a href="../checkout/checkout.php?ids=<?php echo $id ?>"><?php
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px; ">' ;
		
	}

	?>
	</a>
	<!--<img src="imgs/shirt/4 (11).jpg">
	<img src="imgs/shirt/4 (12).jpg">-->
	</div>	
	<h2> Accessories</h2>
<div class="imgs">
		<!--<img src="imgs/accessories/1 (1).webp">
		<img src="imgs/accessories/1 (2).webp">
		<img src="imgs/accessories/1 (3).webp">
		<img src="imgs/accessories/1 (4).webp">
		<img src="imgs/accessories/1 (5).webp">
		<img src="imgs/accessories/1 (6).webp">
		<img src="imgs/accessories/1 (7).webp">
		<img src="imgs/accessories/1 (8).webp">
		<img src="imgs/accessories/1 (9).webp">
		<img src="imgs/accessories/1 (10).webp">-->
		<!--<img src="imgs/accessories/1 (11).webp">
		<img src="imgs/accessories/1 (12).webp">-->
	<?php
	
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT image FROM `inventory` where `genre`='Accessories' AND `user`='Men'";
	$result = mysqli_query($conn,$sql);
	 
	while($row= mysqli_fetch_array($result)){
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;">' ;
		
	}	
	?>
	
	</div>
	<h2> Footwear</h2>
	<div class="imgs">
	<!--<img src="imgs/Footware/2 (1).webp">
	<img src="imgs/Footware/2 (2).webp">
	<img src="imgs/Footware/2 (3).webp">
	<img src="imgs/Footware/2 (4).webp">
	<img src="imgs/Footware/2 (5).webp">
	<img src="imgs/Footware/2 (6).webp">
	<img src="imgs/Footware/2 (7).webp">
	<img src="imgs/Footware/2 (8).webp">
	<img src="imgs/Footware/2 (9).webp">
	<img src="imgs/Footware/2 (10).webp">-->
	<!--<img src="imgs/Footware/2 (11).webp">
	<img src="imgs/Footware/2 (12).webp">-->
		<?php
	
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT image FROM `inventory` where `genre`='Footwear' AND `user`='Men'";
	$result = mysqli_query($conn,$sql);
	 
	while($row= mysqli_fetch_array($result)){
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;">' ;
	}	
	?>
	</div>
</div>
</body>
</html>