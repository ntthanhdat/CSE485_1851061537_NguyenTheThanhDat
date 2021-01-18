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
    $facebook=$_POST['facebook'];

    $sql="update profile set name='$name', facebook='$facebook', about='$about' , phone = '$phone', email ='$email', age='$age', country='$country', address='$add', work1='$work1', work2='$work2'
    where memberid=$id";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
    
}
else if(isset($_POST['skillid'])&&isset($_POST['skillname'])){ //update skill
    $id=$_POST['skillid'];
    $name=$_POST['skillname'];
    $sql="update `profile-resume-skill` set name='$name' where skillid=$id";
    
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit-resume-skill.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}
else if(isset($_POST['sub-skillid'])&&isset($_POST['sub-skillname'])){ //update sub-skill
    $id=$_POST['sub-skillid'];
    $skillid=$_POST['skillid'];
    $name=$_POST['sub-skillname'];
    $point=$_POST['point'];
    $sql="update `skill-detail` set skillname='$name', point ='$point' where skillid=$id ";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit-resume-skill.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}else 
    if(isset($_POST['eduid'])&&isset($_POST['major'])){ //update education
        $id=$_POST['eduid'];
        $year=$_POST['year'];
        $pro=$_POST['pro'];
        $major=$_POST['major'];
        $about=$_POST['about'];
        $sql="update `profile-resume-education` set year='$year', term ='$pro', majorname='$major', `major-about`='$about' where eduid=$id ";
        echo $sql;
        mysqli_set_charset($conn,'UTF8');
         if(mysqli_query($conn,$sql)){
             header("Location:edit-resume-edu.php");
            }
            else{
                $e= mysqli_error($conn);
                echo $e;
               //header("Location:../error.php?error=$e");
            }
}
else
if(isset($_POST['workid'])){  //update work detail
    $id=$_POST['workid'];
    $name=$_POST['name'];
    
    $icon=$_POST['icon'];
    $about=$_POST['about'];
    if($icon!=0)
    $sql="update `profile-detail-work` set  workname ='$name', icon='$icon', `about`='$about' where workid=$id ";
    else
    $sql="update `profile-detail-work` set  workname ='$name',  `about`='$about' where workid=$id ";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit-work.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}
else
if(isset($_POST['knowlegeid'])){ //update knowlege
    $id=$_POST['knowlegeid'];
    $name=$_POST['name'];
    
    $sql="update `knowlege` set  name ='$name' where knowlegeid=$id ";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit-resume-skill.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}
else
if(isset($_POST['expid'])){  //update exp
    $id=$_POST['expid'];
    $year=$_POST['year'];
    $name=$_POST['name'];
    $company=$_POST['company'];
    $about=$_POST['about'];
    
    $sql="update `profile-resume-exp` set `exp-year` ='$year', `exp-company`='$company',  `exp-name` ='$name', `exp-about`='$about'  where expid=$id ";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit-resume-edu.php");
        }
        else{
            $e= mysqli_error($conn);
            echo $e;
           //header("Location:../error.php?error=$e");
        }
}
else
if(isset($_POST['cenid'])){  //update certificate
    $id=$_POST['cenid'];
    $year=$_POST['date'];
    $name=$_POST['name'];
    $picture=$_POST['picture'];
    
    $sql="update `certificate` set date ='$year', picture='$picture',  name ='$name'  where cenid=$id ";
    echo $sql;
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
         header("Location:edit-resume-edu.php");
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