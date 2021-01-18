<?php
session_start();
if ($_SESSION['role'] != 1) {
    header("Location:index.php");
} else {


    include('config.php');
    $id = $_GET['id'];
    $sql = "select * from users where userid= '$id'";
    mysqli_set_charset($conn, 'UTF8');
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $post = mysqli_fetch_assoc($result);


        if ($post['user_level'] == 1) {   // check xem role co phai admin
            
            
            
            if (isset($_SESSION['comfirm']) && $_SESSION['comfirm']== 1) { // check confirm


                $sql = "delete from users where userid= '$id'";
                if (mysqli_query($conn, $sql)) {
                    unset($_SESSION['comfirm']);
                    unset($_SESSION['delete_target']);
                    header("Location:index.php");
                } else {
                    $e = mysqli_error($conn);
                    header("Location:error.php?error=$e");
                }


            } else {
                $_SESSION['delete_target']= $_GET['id'];
                include("confirm-delete.php");
            }
        } else {
            $sql = "delete from users where userid= '$id'";
            if (mysqli_query($conn, $sql)) {
                header("Location:index.php");
            } else {
                $e = mysqli_error($conn);
                header("Location:error.php?error=$e");
            }
        }
    }
}
