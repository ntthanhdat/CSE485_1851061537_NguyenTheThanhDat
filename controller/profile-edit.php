<?php
include('config.php');
session_start();
$id=$_SESSION['userid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$add1=$_POST['address1'];
$add2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state_country'];
$zcode_pcode=$_POST['zcode_pcode'];
$sql1 = "select * from users where email='$email'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
    $e = 'This email address already exist.';
    header("Location:../error.php?error=$e");
} else {

$sql="update users set first_name='$fname',  last_name='$lname',  phone = '$phone', email ='$email' ,
address1='$add1', address2='$add2', city='$city', zcode_pcode='$zcode_pcode'
where userid=$id";

mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:../profile.php");
    }
    else{
        $e= mysqli_error($conn);
       header("Location:error.php?error=$e");
    }
}
?>