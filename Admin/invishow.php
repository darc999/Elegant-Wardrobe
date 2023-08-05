<?php
if(isset($_POST['submit2'])){
?>
<html>
	<head>
		<!--Internal CSS-->
		<style>
			
			td{
				text-align: center;
			}
			table{
				font-size:16px;
				font-family: Gill Sans, sans-serif;
				font-weight: bold;
				font-stretch: ultra-expanded;
				border-collapse: collapse;
  				width: 75%;
			}
			th, td {
  				text-align: center;
  				padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}
		</style>
		
	</head>
<!--Men Table-->
<table width="50%" border="1" align="center">
<thead>
	<tr>
		<th colspan='5' style="font-size:20px; background-color: #003cff;
  				color: white;">Men's Clothing</th>
	</tr>
	<tr>
	<th style="background-color: #003cff; color: white;">ID</th>
	<th style="background-color: #003cff; color: white;">Image</th>
	<th style="background-color: #003cff; color: white;">Name</th>
	<th style="background-color: #003cff; color: white;">Price</th>
	<th style="background-color: #003cff; color: white;">Stock</th>	
	</tr>
	</thead>
	<?php
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT `id`, `image`, `name`, `price`, `stock`, `genre`, `user` FROM `inventory` WHERE `user` = 'Men'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		?>
	<tr>
		<td><?php
		echo $row['id'];
			?>
		</td>
		<td>
			
			<?php 
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;">' ;
			?>
		</td>
		<td><?php
		echo $row['name'];
			?>
		</td>
		<td><?php 
			echo $row['price'];
			?>
		</td>
		<td><?php 
			echo $row['stock'];?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
 <!--Women Table-->
<table width="50%" border="1" align="center" style=" margin-top:100px;">
<thead>
	<tr>
		<th colspan='5' style="font-size:20px; background-color: #ff00f7; color: white;">Women's Clothing</th>
	</tr>
	<tr>
	<th style="background-color: #ff00f7; color: white;">ID</th>
	<th style="background-color: #ff00f7; color: white;">Image</th>
	<th style="background-color: #ff00f7; color: white;">Name</th>
	<th style="background-color: #ff00f7; color: white;">Price</th>
	<th style="background-color: #ff00f7; color: white;">Stock</th>	
	</tr>
	</thead>
	<?php
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT `id`, `image`, `name`, `price`, `stock`, `genre`, `user` FROM `inventory` WHERE `user` = 'Women'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		?>
	<tr>
		<td><?php
		echo $row['id'];
			?>
		</td>
		<td>
			
			<?php 
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;">' ;
			?>
		</td>
		<td><?php
		echo $row['name'];
			?>
		</td>
		<td><?php 
			echo $row['price'];
			?>
		</td>
		<td><?php 
			echo $row['stock'];?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
 <!--Children Table-->
 <table width="50%" border="1" align="center" style=" margin-top:100px;">
<thead>
	<tr>
		<th colspan='5' style="font-size:20px; background-color: #04AA6D; color: white;">Children's Clothing</th>
	</tr>
	<tr>
	<th style="background-color: #04AA6D; color: white;">ID</th>
	<th style="background-color: #04AA6D; color: white;">Image</th>
	<th style="background-color: #04AA6D; color: white;">Name</th>
	<th style="background-color: #04AA6D; color: white;">Price</th>
	<th style="background-color: #04AA6D; color: white;">Stock</th>	
	</tr>
	</thead>
	<?php
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT `id`, `image`, `name`, `price`, `stock`, `genre`, `user` FROM `inventory` WHERE `user` = 'Children'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		?>
	<tr>
		<td><?php
		echo $row['id'];
			?>
		</td>
		<td>
			
			<?php 
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px;">' ;
			?>
		</td>
		<td><?php
		echo $row['name'];
			?>
		</td>
		<td><?php 
			echo $row['price'];
			?>
		</td>
		<td><?php 
			echo $row['stock'];?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</html>
<?php } ?>
 
