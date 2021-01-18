<?php
include('config.php');
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$user_level = $_POST['user_level'];
$memberid=$_POST['memberid'];
// Check for a first name:                        #3

$sql1 = "select * from users where email='$email'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
    $e = 'This email address already exist.';
    header("Location:error.php?error=$e");
} else {
    $hash= password_hash($password, PASSWORD_DEFAULT); #hash work ok
    $sql = "insert into users(first_name, last_name, email, password, address1, phone, user_level, memberid, status)
VALUES ('$fname','$lname','$email', '$hash' ,'$address1',  '$phone','$user_level','$memberid',1)";
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    } else {
        $e = mysqli_error($conn);
        header("Location:error.php?error=$e");
    }
}
