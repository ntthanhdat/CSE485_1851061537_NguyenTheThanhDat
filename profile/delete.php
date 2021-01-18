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
    else 
    if(isset($_GET['skillid'])){
        $sql = "delete from `skill-detail` where skillid= $_GET[skillid]";
            if (mysqli_query($conn, $sql)) {
                $sql = "delete from `profile-resume-skill` where skillid= $_GET[skillid]";
                if (mysqli_query($conn, $sql)) {
                    header("Location:edit-resume-skill.php");
                } else {
                    $e = mysqli_error($conn);
                    header("Location:../error.php?error=$e");
                }
            } else {
                $e = mysqli_error($conn);
                header("Location:../error.php?error=$e");
            }
    }
    else 
    if(isset($_GET['eduid'])){
        $sql = "delete from `profile-resume-education` where eduid= $_GET[eduid]";
            if (mysqli_query($conn, $sql)) {
                header("Location:edit-resume-edu.php");
            } else {
                $e = mysqli_error($conn);
                header("Location:../error.php?error=$e");
            }
    }
    else 
    if(isset($_GET['expid'])){
        $sql = "delete from `profile-resume-exp` where expid= $_GET[expid]";
            if (mysqli_query($conn, $sql)) {
                header("Location:edit-resume-edu.php");
            } else {
                $e = mysqli_error($conn);
                header("Location:../error.php?error=$e");
            }
    }
    else 
    if(isset($_GET['cerid'])){
        $sql = "delete from `certificate` where cenid= $_GET[cerid]";
            if (mysqli_query($conn, $sql)) {
                header("Location:edit-resume-edu.php");
            } else {
                $e = mysqli_error($conn);
                header("Location:../error.php?error=$e");
            }
    }
    else 
    if(isset($_GET['workid'])){
        $sql = "delete from `profile-detail-work` where workid= $_GET[workid]";
            if (mysqli_query($conn, $sql)) {
                header("Location:edit-work.php");
            } else {
                $e = mysqli_error($conn);
                header("Location:../error.php?error=$e");
            }
    }

} ?>