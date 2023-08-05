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
    $cardnumber = $_POST['cname'];
    $id=$_SESSION['idss'];
	$q =$_SESSION['quan'];
	$full=$_SESSION['full'];
	
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `history`(`name`,`Card Number`,`Full price`,`brand_id`,`amount`) VALUES ('$name','$cardnumber','$full','$id','$q')";
	$oldq= $_SESSION['oldq'];
    $newq=$oldq-$q;
	
    $query = "UPDATE inventory SET stock='$newq' WHERE id=$id";
    
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