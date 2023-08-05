<?php
if(isset($_POST['submit'])){
    //Variable's to create connection between db and php

    $server='localhost';
    $uname='root';
    $password='';
    $db='elegant';

    $conn=mysqli_connect($server,$uname,$password,$db); //Database connection

   if(!$conn){
	   echo 'Connection Error'.mysqli_connect_error();
   }
$sql= 'SELECT*FROM admin_table';//query for admin recs
$result=mysqli_query($conn,$sql);//queryy and rslt
$admin=mysqli_fetch_all($result,MYSQLI_ASSOC);
//$count = mysqli_num_rows($result);
//print_r($admin)
}?>
<html>
  <head>
    <style>
      body {
        background-image: url("sky.jpg");
        background-size: cover;
        background-repeat: no-repeat, repeat;
        background-color: #cccccc;
      }
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
      th{
        color: white;
        background-color: #04AA6D;
      }

			tr:nth-child(even){background-color: #f2f2f2}
    </style>
  </head>
<?php if (count($admin) > 0): ?>

<table align="center" border="1" style="border-color: #f2f2f2;">
  <thead>
    <tr>
      <th colspan="2">Admin Table</th>
    </tr>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($admin))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($admin as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
 



