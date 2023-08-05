<?php

$conn = mysqli_connect('localhost','root','', 'elegant');
if(isset($_POST["submit"])){
    $uname = $_POST["username"];
    $pword = $_POST["password"];

    $sql = mysqli_query($conn, "SELECT count(*) as total from admin_table where username ='".$uname."' AND password= '".$pword."'") or die(mysqli_error($conn));
	/*$sql = mysqli_query($conn, "SELECT count(*) as total from user_table where User_Name ='".$uname."' AND Password= '".$pword."'") or die(mysqli_error($conn));*/

    $rw = mysqli_fetch_array($sql);
    if($rw['total']>0){
        echo "<script>alert('Successffull')</script>";
        header("Location:../Admin/adminchose.php");
        exit();
    }
    else{
        echo "<script>window.alert('Userame/Password is incorrect. Please check and try again!')</script>";
        //echo "<script> window.location='admin.html'</script>";
    }
}
?>