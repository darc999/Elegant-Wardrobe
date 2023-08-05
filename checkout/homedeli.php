<?php
session_start();
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "elegant";
    
    // get values form input text and number

    $name = $_POST['name'];
    $Address=$_POST['Address'];
    $id=$_SESSION['ids'];
	$q =$_SESSION['quan'];
	$full=$_SESSION['full'];
	
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `homedeli`(`Name`,`Address`,`Full price`,`brand_id`,`amount`) VALUES ('$name','$Address','$full','$id','$q')";
    
    $result = mysqli_query($connect,$query);
    
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