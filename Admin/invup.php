<?php

$conn = mysqli_connect('localhost','root','', 'elegant');
if(isset($_POST["submit"])){
    $img = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST["name"];
 	$price = (int) $_POST["price"];
	 $stock = (int) $_POST["stock"];
	$id = (int) $_POST["id"];
	$genre =  $_POST["genre"];
	$user =  $_POST["user"];
	
	
	

    $sql = "UPDATE inventory SET image='$img',name='$name',price='$price',stock='$stock',genre='$genre',user='$user' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Updated';
    }
    
    else{
        echo 'Data Not Updated';
    }
}
?> 