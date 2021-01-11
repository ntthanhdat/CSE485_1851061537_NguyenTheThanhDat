<?php 
include('config.php');
$id=$_GET['id'];

$sql="delete from users where userid= '$id'";
if(mysqli_query($conn,$sql)){
    header("Location:index.php");
}
else{
    $e= mysqli_error($conn);
   header("Location:error.php?error=$e");
}
?>