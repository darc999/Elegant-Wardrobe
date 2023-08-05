<?php

    //Variable's to create connection between db and php

    $server='localhost';
    $uname='root';
    $password='';
    $db='elegant';

    $conn=mysqli_connect($server,$uname,$password,$db); //Database connection

    $un=$_POST['uname'];    //taking username from form
    $email=$_POST['ed'];      //taking password from form
    $pw=$_POST['psw'];      //taking password from form
    $cpw=$_POST['cpsw'];      //taking confirm password from form

    if(strlen($pw)<=8){
        echo "<script>alert('Password should be longer than 8 characters');window.location.href='register.php';</script>";
    }elseif(!preg_match("/^[a-zA-z]*$/",$un)){
        echo "<script>alert('Username should not have any special character');window.location.href='register.php';</script>";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Email You have entered was wrong');window.location.href='register.php';</script>";
    }else{

        if(isset($_POST['submit'])||$pw==$cpw){
            $sql="INSERT INTO `user_table`(`User_Name`, `Password`,`Email`) VALUES ('$un','$pw','$email')"; //sql query
            $result=mysqli_query($conn,$sql);   //query exection
            if($result){
                echo "<script>alert('registration Successful');window.location.href='register.php';</script>"; //Display "Registration Successful" and after clicking 'ok', redirect to the 'register.php'
            
            }else{
                echo "<script>alert('registration unsuccessful');window.location.href='register.php';</script>"; //Display "Registration unsuccessful" and after clicking 'ok', redirect to the 'register.php'
            }
        }else{
            echo "<script>alert('Re-check your password');window.location.href='register.php';</script>"; //Display "Re-check your password" and after clicking 'ok', redirect to the 'register.php'
        }
    }
?>