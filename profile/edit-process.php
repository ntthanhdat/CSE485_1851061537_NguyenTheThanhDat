<?php
 
include('../admin/config.php');
if(isset($_POST['memberid'])&&isset($_POST['work1'])){
    $id=$_POST['memberid'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $work1=$_POST['work1'];
    $work2=$_POST['work2'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $country=$_POST['country'];
    $add=$_POST['address'];
    $about=$_POST['about'];

    $sql="update profile set name='$name', about='$about' , phone = '$phone', email ='$email', age='$age', country='$country', address='$add', work1='$work1', work2='$work2'
    where memberid=$id";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:index.php?memberid=$id");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
    
}
else if(isset($_POST['skillid'])&&isset($_POST['skillname'])){
    $id=$_POST['skillid'];
    $name=$_POST['skillname'];
    $sql="update `profile-resume-skill` set name='$name' where skillid=$id";
    
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:../index.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}
else if(isset($_POST['sub-skillid'])&&isset($_POST['sub-skillname'])){
    $id=$_POST['sub-skillid'];
    $skillid=$_POST['skillid'];
    $name=$_POST['sub-skillname'];
    $point=$_POST['point'];
    $sql="update `skill-detail` set skillname='$name', point ='$point' where skillid=$id ";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:../index.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}
else
 header("Location:../error.php?error=$e");
?>