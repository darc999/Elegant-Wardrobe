<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MEN</title>
	<link href="children.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include('aheader.php'); ?>
<h1>Children Section</h1>
<h2> Tops and Shirts</h2>
<div class="imgs">
	<!--<img src="imgs/tops/4 (1).jpg">
	<img src="imgs/tops/4 (2).jpg">
	<img src="imgs/tops/4 (3).jpg">
	<img src="imgs/tops/4 (4).jpg">
	<img src="imgs/tops/4 (5).jpg">
	<img src="imgs/tops/4 (6).jpg">
	<img src="imgs/tops/4 (7).jpg">
	<img src="imgs/tops/4 (8).jpg">
	<img src="imgs/tops/4 (9).jpg">
	<img src="imgs/tops/4 (10).jpg">-->
		<?php
	
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `genre`='Shirt' AND `user`='Children'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		$id=$row['id'];
		//echo $id;
		?><a href="../checkout/checkout.php?ids=<?php echo $id ?>"><?php
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px; ">' ;
		
	}

	?>
	</a>
	
	</div>	
	<h2> Accessories</h2>
<div class="imgs">
		<!--<img src="imgs/accessories/1 (1).jpg">
		<img src="imgs/accessories/1 (2).jpg">
		<img src="imgs/accessories/1 (3).jpg">
		<img src="imgs/accessories/1 (4).jpg">
		<img src="imgs/accessories/1 (5).jpg">
		<img src="imgs/accessories/1 (6).jpg">
		<img src="imgs/accessories/1 (7).jpg">
		<img src="imgs/accessories/1 (8).jpg">
		<img src="imgs/accessories/1 (9).jpg">
		<img src="imgs/accessories/1 (10).jpg">-->
	<?php
	
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `genre`='Accessories' AND `user`='Children'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		$id=$row['id'];
		//echo $id;
		?><a href="../checkout/checkout.php?ids=<?php echo $id ?>"><?php
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px; ">' ;
		
	}

	?>
	</a>
		
	</div>
	<h2> Footwear</h2>
	<div class="imgs">
	<!--<img src="imgs/Footware/2 (1).jpg">
	<img src="imgs/Footware/2 (2).jpg">
	<img src="imgs/Footware/2 (3).jpg">
	<img src="imgs/Footware/2 (4).jpg">
	<img src="imgs/Footware/2 (5).jpg">
	<img src="imgs/Footware/2 (6).jpg">
	<img src="imgs/Footware/2 (7).jpg">
	<img src="imgs/Footware/2 (8).jpg">
	<img src="imgs/Footware/2 (9).jpg">
	<img src="imgs/Footware/2 (10).jpg">-->
	<?php
	
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `genre`='Footwear' AND `user`='Children'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		$id=$row['id'];
		//echo $id;
		?><a href="../checkout/checkout.php?ids=<?php echo $id ?>"><?php
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px; ">' ;
		
	}

	?>
	</a>
	</div>
</div>
</body>
</html>