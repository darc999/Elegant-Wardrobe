<?php
	//$id= $_POST['ids'];
	$quantity = $_POST["quantity"];
	$conn = mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'elegant');
	/*$sql="SELECT * FROM `inventory` where `id`='$id' ";
	$result = mysqli_query($conn,$sql);
	
	while($row= mysqli_fetch_array($result)){
			$price= $row['price'];
			echo $price;
	}*/
/*$sql = "SELECT price FROM inventory Where id='$id'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  //if($id=$row["id"] or $price=$row["price"] or $genre=$row["genre"] or $user=$row["user"] ){
    echo "| PRICE:".$id;
  }
} else {
  echo "0 results";
}*/
session_start();
if(isset($_POST["submit"])){

	$idss= $_SESSION['idss'];
	$_SESSION['quan']=$quantity;
	
		//echo $idss;
$sql = "SELECT price FROM inventory Where id='$idss'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  //if($id=$row["id"] or $price=$row["price"] or $genre=$row["genre"] or $user=$row["user"] ){
    //echo " PRICE:".$row["price"];
	$price= $row['price'];
	$full= $price*$quantity;
	//echo $full;
	header("Location: checkout2.php?full=".$full);
  }
} else {
  echo "0 results";
}
	
		}
?>
