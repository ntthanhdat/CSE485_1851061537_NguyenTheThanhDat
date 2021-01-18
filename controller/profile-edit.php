<?php
include('config.php');
session_start();
$id=$_SESSION['userid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$add1=$_POST['address1'];
$city=$_POST['city'];
$sql1 = "select * from users where email='$email'";
$result = mysqli_query($conn, $sql1);
$sql="update users set first_name='$fname',  last_name='$lname',  phone = '$phone', email ='$email' ,
address1='$add1',  city='$city'
where userid=$id";

mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:../profile.php");
    }
    else{
        $e= mysqli_error($conn);
       header("Location:error.php?error=$e");
    }

?>