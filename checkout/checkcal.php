<?php
	$id= $_GET['ids'];
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `id`='$id' ";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
			echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;  ">' ;
			echo $row['price'];
			echo $row['stock']; 
	}
?>
