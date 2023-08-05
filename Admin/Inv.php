<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventary management</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="loginn.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include('../aheader.php'); ?>	
	
	<section class="loginheader">
	<h1 class="h1">Add to Inventory</h1>
<div class="login_form overlay">
<form  method="POST" action="invadd.php" enctype="multipart/form-data">
 <div class="container">
    <label  for="image"><b>Image</b></label>
    <input type="file" id="image" name="image" required>
<br>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	 
	 <label for="price"><b>Price</b></label>
    <input type="text" placeholder="Enter price" name="price" required>
	 
	 <label for="stock"><b>Stock</b></label>
    <input type="text" placeholder="Enter stock" name="stock" required>
	 
	 <label for="stock"><b>Genre</b></label>
    <input type="text" placeholder="Enter genre" name="genre" required>
	 
	 <label for="stock"><b>User</b></label>
    <input type="text" placeholder="Enter user" name="user" required>
	 
    <button type="submit" name="submit">Add</button>
   
  </div>
</div>
</div>
	</form>
	</section>

	<section class="loginheader">
	<h1 class="h1">Update Inventory</h1>

<div class="login_form overlay">
<form  method="POST" action="invup.php" enctype="multipart/form-data">
 <div class="container">
	 
	 <label for="stock"><b>ID</b></label>
    <input type="text" placeholder="Enter id" name="id" >
	 
    <label  for="image"><b>Image</b></label>
    <input type="file" id="image" name="image" >
<br>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >
	 
	 <label for="price"><b>Price</b></label>
    <input type="text" placeholder="Enter price" name="price" >
	 
	 <label for="stock"><b>Stock</b></label>
    <input type="text" placeholder="Enter stock" name="stock" >
	 
	 <label for="stock"><b>Genre</b></label>
    <input type="text" placeholder="Enter genre" name="genre" required>
	 
	 <label for="stock"><b>User</b></label>
    <input type="text" placeholder="Enter user" name="user" required>
	 
    <button type="submit" name="submit">Update</button>
   
  </div>
</div>
</div>
	</form>
	</section>

<section class="loginheader">
	<h1 class="h1">Search Inventory</h1>

<div class="login_form overlay">
<form  method="POST" action="invse.php" >
 <div class="container">
	 
	 <label for="stock"><b>ID</b></label>
    <input type="text" placeholder="Enter id" name="id" >
<br>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >
	 
	 <label for="price"><b>Price</b></label>
    <input type="text" placeholder="Enter price" name="price" >
	 
	 <label for="stock"><b>Genre</b></label>
    <input type="text" placeholder="Enter genre" name="genre" >
	 
	 <label for="stock"><b>User</b></label>
    <input type="text" placeholder="Enter user" name="user" >
	 
    <button type="submit" name="submit">Search</button>
   
  </div>
</div>
</div>
	</form>
	</section>
	<section class="loginheader">
	<form  method="POST" action="invishow.php" >
	<button type="submit" name="submit2"><h1 class="h11">Show Inventory table</h1></button>
	</form>
	</section>

</body>
</html>