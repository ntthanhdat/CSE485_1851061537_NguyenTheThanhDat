<?php session_start();
if(!isset($_SESSION['memberid'])){


    echo '<h1>Your required profile not exist</h1>';
} else {
    include('../admin/config.php');
    if(isset($_GET['subskillid'])){
        $sql = "delete from `skill-detail` where subskillid= $_GET[subskillid]";
            if (mysqli_query($conn, $sql)) {
                header("Location:edit-resume-skill.php");
            } else {
                $e = mysqli_error($conn);
                header("Location:../error.php?error=$e");
            }
           
    }
    



} ?>