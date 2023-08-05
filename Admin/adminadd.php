<?php 
/**if(isset($_POST['submit2'])){
	$server='localhost';
    $uname='root';
    $password='';
    $db='elegant';

    $conn=mysqli_connect($server,$uname,$password,$db); //Database connection

   if(!$conn){
	   echo 'Connection Error'.mysqli_connect_error();
   }
	$adm = $_POST['admin'];
	$admp = $_POST['adminp'];
	$query = "INSERT INTO admin_table('username','password') VALUES ('$adm','$admp')";
	$result = mysqli_query($conn,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    
 
}**/
  
if(isset($_POST['submit2']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "elegant";
    
    // get values form input text and number

    $adminname = $_POST['admin'];
    $adminpass = $_POST['adminp'];
    
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `admin_table`(`username`,`password`) VALUES ('$adminname','$adminpass')";
    
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
