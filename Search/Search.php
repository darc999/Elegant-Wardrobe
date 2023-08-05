<!doctype html>
<html>
<head>
<meta charset="utf-8">
	   <link href="../Mylogin/login.css" rel="stylesheet" type="text/css">
	  	<link href="search.css" rel="stylesheet" type="text/css">
<title>Search</title>
</head>
<body>
<section class="loginheader">
	<h1 class="h1">Search</h1>

<div class="login_form overlay">
<!--<form  method="POST" action="Searchact.php" >-->
<form  method="POST"  >
 <div class="container">
    <label  for="look"><b>Looking wears For ? :</b></label>
    <input type="text" placeholder="Men,Children,Women?" name="look" required>
	<br>
    <label for="psw"><b>What type of wears ? :</b></label><br>
    <input type="text" placeholder="Footwear,Accessories,Shirts " name="type" required>
	
    <button type="submit" name="submit">Search</button>
   
  </div>
</form>
</div>
</div><div class="imgs">
<?php
	
if(isset($_POST['submit'])) {
	$look=$_POST['look'];
	$type=$_POST['type'];
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	$sql="SELECT * FROM `inventory` where `user`='$look' AND `genre`='$type'";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
		$id=$row['id'];
		//echo $id;
		?><a href="../checkout/checkout.php?ids=<?php echo $id ?>"><?php
		echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:350px; height:350px; ">' ;
		
	}
}
	?>	
	
	
	
	</div>
	</section>

</body>
</html>