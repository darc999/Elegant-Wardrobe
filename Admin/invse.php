<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elegant";
	
$name = $_POST["name"];
$price = (int) $_POST["price"];
$id = (int) $_POST["id"];
$genre = $_POST["genre"];
$user =  $_POST["user"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,price,genre,user FROM inventory Where id='$id' or name='$name'or price='$price'or genre='$genre'or user='$user'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  //if($id=$row["id"] or $price=$row["price"] or $genre=$row["genre"] or $user=$row["user"] ){
    echo "ID:".$row["id"]. "| NAME:".$row["name"]. "| PRICE:".$row["price"]. "| GENRE:" .$row["genre"]. "| USER:" . $row["user"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>