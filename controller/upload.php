<?php
 $link =  realpath($_FILES["file"]["tmp_name"]);
    //$link=$_POST['file'];
    include('config.php');
    session_start();
    $id=$_SESSION['userid'];
    $sql="update users set avatar=LOAD_FILE('$link')  where userid=$id ";
    $sql = str_replace("\\", "/", $sql);
    //echo $sql;
    if(mysqli_query($conn,$sql)){
      header("Location:../profile.php");
      }
    // update users set avatar=LOAD_FILE('B:/xampp/htdocs/onmifood/image/customer-3.jpg')  where userid=9 //okela
