<?php 
include('config.php');
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$add1=$_POST['address1'];
$city=$_POST['city'];
$user_level=$_POST['user_level'];
$memberid=$_POST['memberid'];
$sql="update users set first_name='$fname',  last_name='$lname',  phone = '$phone', email ='$email', 
user_level='$user_level', memberid ='$memberid', address1='$add1',  city='$city'
where userid=$id";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:index.php");
    }
    else{
        $e= mysqli_error($conn);
       header("Location:error.php?error=$e");
    }

?>