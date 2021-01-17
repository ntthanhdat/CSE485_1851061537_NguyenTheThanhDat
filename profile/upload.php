<?php
 $link =  realpath($_FILES["file"]["tmp_name"]);
    //$link=$_POST['file'];
    include('../admin/config.php');
    session_start();
    $id=$_SESSION['memberid'];
    $sql="update profile set picture=LOAD_FILE('$link')  where memberid=$id ";
    $sql = str_replace("\\", "/", $sql);
    //echo $sql;
    if(mysqli_query($conn,$sql)){
      header("Location:index.php?memberid=$_SESSION[memberid]");
      }
    // update users set avatar=LOAD_FILE('B:/xampp/htdocs/onmifood/image/customer-3.jpg')  where userid=9 //okela
