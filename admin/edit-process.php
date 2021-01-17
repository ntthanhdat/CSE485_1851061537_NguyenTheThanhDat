<?php 
include('config.php');
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$class=$_POST['class'];
$add1=$_POST['address1'];
$add2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state_country'];
$user_level=$_POST['user_level'];
$memberid=$_POST['memberid'];
$sql="update users set first_name='$fname',  last_name='$lname',  phone = '$phone', email ='$email', class='$class',
user_level='$user_level', memberid ='$memberid', address1='$add1', address2='$add2', city='$city', zcode_pcode='$zcode_pcode'  
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