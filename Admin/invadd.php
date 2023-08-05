<?php

$conn = mysqli_connect('localhost','root','', 'elegant');
if(isset($_POST["submit"])){
    $img = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST["name"];
 	$price = (int) $_POST["price"];
	$stock = (int) $_POST["stock"];
	$genre =  $_POST["genre"];
	$user =  $_POST["user"];
	
	
	
	
	$query = "INSERT INTO `inventory`(`image`,`name`,`price`,`stock`,`genre`,`user`) VALUES ('$img','$name','$price','$stock','$genre','$user')";
    
    $result = mysqli_query($conn,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
}
?>